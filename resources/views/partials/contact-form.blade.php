<form action="{{ route('contact.store') }}" method="POST" class="contact-form contact-form needs-validation" novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="name" name="name" placeholder="Nom*" type="text" required>
                <div class="invalid-feedback">Veuillez saisir votre nom.</div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required>
                <div class="invalid-feedback">Veuillez saisir une adresse email valide.</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <input class="form-control" id="subject" name="subject" placeholder="Sujet*" type="text" required>
                <div class="invalid-feedback">Veuillez saisir un sujet.</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group comments">
                <textarea class="form-control" id="message" name="message" placeholder="Votre message ici *" required></textarea>
                <div class="invalid-feedback">Veuillez saisir un message.</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="submit" name="submit" id="submit">
                <i class="fa fa-paper-plane"></i> Envoyer
            </button>
        </div>
    </div>
</form>
