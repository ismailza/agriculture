<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ServiceRequest;
use App\Mail\admin\ContactMail as AdminContactMail;
use App\Mail\admin\ServiceRequestMail as AdminServiceRequestMail;
use App\Mail\ContactMail as ClientContactMail;
use App\Mail\ServiceRequestMail as ClientServiceRequestMail;
use App\Models\About;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Testimonial;
use App\Models\Transformation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * Show the application home page.
     * @return View
     */
    public function index(): View
    {
        return view('index', [
            'slides' => Slide::Recent()->get(),
            'about' => About::first(),
            'services' => Service::Recent()->get(),
            'products' => Product::Recent()->limit(6)->get(),
            'transformations' => Transformation::Recent()->limit(6)->get(),
            'partners' => Partner::Recent()->get(),
            'testimonials' => Testimonial::Active()->recent()->get(),
            'posts' => Post::Published()->orderBy('created_at', 'desc')->limit(3)->get(),
        ]);
    }

    /**
     * Show the application about page.
     * @return View
     */
    public function about(): View
    {
        return view('about', [
            'about' => About::first(),
            'partners' => Partner::Recent()->get(),
        ]);
    }

    /**
     * Show the services page.
     * @return View
     */
    public function services(): View
    {
        return view('services.index', [
            'services' => Service::Recent()->get(),
        ]);
    }

    /**
     * Show the service details page.
     * @param Service $service
     * @return View
     */
    public function showService(Service $service): View
    {
        return view('services.show', [
            'service' => $service,
        ]);
    }

    /**
     * Store service request
     * @param ServiceRequest $request
     * @return RedirectResponse
     */
    public function storeServiceRequest(ServiceRequest $request): RedirectResponse
    {
        $data = $request->validated();
        // Store the service request
        $service = Service::findOrFail($data['service_id']);
        $data['status'] = 'pending';
        $serviceRequest = $service->requests()->create($data);
        // Send notification email
        Mail::send(new AdminServiceRequestMail($serviceRequest, $service));
        Mail::send(new ClientServiceRequestMail($serviceRequest, $service));
        // Back with success message
        sweetalert('Votre demande de service a été envoyée avec succès. Nous vous contacterons bientôt. Merci.');
        return back();
    }

    /**
     * Show the productions page.
     * @return View
     */
    public function productions(): View
    {
        return view('productions.index', [
            'products' => Product::Recent()->get(),
            'transformations' => Transformation::Recent()->get(),
        ]);
    }

    /**
     * Show the product details page.
     * @param Product $product
     * @return View
     */
    public function showProduct(Product $product): View
    {
        return view('productions.product', [
            'product' => $product,
            'relatedProducts' => Product::where([
                ['id', '!=', $product->id],
                ['category_id', $product->category_id]
            ])->orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the transformation details page.
     * @param Transformation $transformation
     * @return View
     */
    public function showTransformation(Transformation $transformation): View
    {
        return view('productions.transformation', [
            'transformation' => $transformation,
            'latestProducts' => Product::Recent()->limit(6)->get(),
        ]);
    }

    /**
     * Show the blogs page.
     * @return View
     */
    public function blogs(): View
    {
        return view('blogs.index', [
            'posts' => Post::published()->orderBy('created_at', 'desc')->paginate(3),
        ]);
    }

    /**
     * Show the blogs by category page.
     * @param Category $category
     * @return View
     */
    public function blogsByCategory(Category $category): View
    {
        return view('blogs.index', [
            'posts' => $category->posts()->paginate(3),
        ]);
    }

    public function showBlog(Post $post): View
    {
        return view('blogs.show', [
            'post' => $post,
            'recentPosts' => Post::published()->orderBy('created_at', 'desc')->limit(6)->get(),
            'postTags' => $post->meta_keywords ? explode(',', $post->meta_keywords) : [],
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the contact page.
     * @return View
     */
    public function contact(): View
    {
        return view('contact');
    }

    /**
     * Save contact form and sending notification emails
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function storeContact(ContactRequest $request): RedirectResponse
    {
        $data = $request->validated();
        // Store the contact form data
        $data['status'] = 'new';
        $contact = new Contact();
        $contact->fill($data);
        $contact->save();
        // Send notification emails
        Mail::send(new AdminContactMail($contact));
        Mail::send(new ClientContactMail($contact));
        // Back with success message
        sweetalert('Votre message a été envoyé avec succès. Nous vous contacterons bientôt. Merci.');
        return back();
    }
}
