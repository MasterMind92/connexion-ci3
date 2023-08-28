<div id="contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contact-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contact-title">Contactez-nous</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body shadow">

                        <form method="post" action="">
                            <!-- LIGNE DU FORMULAIRE -->
                            <div class="form-group row">
                                <div class="col-3 text-right">
                                <label class="mt-3" for="subject">Sujet</label>
                                </div>
                                <div class="col-6 py-2">
                                    <select id="subject" class="form-control" name="">
                                        <option value="">Service Client</option>
                                        <option value="">WebMaster</option>
                                    </select>
                                </div>
                            </div>
                            <!-- LIGNE DU FORMULAIRE -->
                            <div class="form-group row">
                                <div class="col-3 text-right">
                                    <label class="my-2" for="">Adresse E-mail</label>
                                </div>
                                <div class="col-6">
                                    <input type="e-mail" name="email" id="" class="form-control" placeholder="" aria-describedby="">
                                </div>
                            </div>
                            <!-- LIGNE DU FORMULAIRE -->
                            <div class="form-group row">
                                <div class="col-3 text-right">
                                    <label class="my-2" for="">Document Joint</label>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="" placeholder="" aria-label="Recipient's " aria-describedby="my-addon">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Choisir un Fichier</button>
                                            <input type="file" name="document" id="document" class="d-none">
                                            <!-- <span class="input-group-text" id="my-addon">Text</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <span>Optionnel</span>
                                </div>
                            </div>
                            <!-- LIGNE DU FORMULAIRE -->
                            <div class="form-group row">
                                <div class="col-3 text-right">
                                    <label class="my-2" for="">Message</label>
                                </div>
                                <div class="col">
                                    <textarea id="message" class="form-control" name="" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- LIGNE DU FORMULAIRE -->

                            <div class="form-group row justify-content-end">
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-info btn-block rounded-0" type="submit"><strong>Valider</strong></button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>