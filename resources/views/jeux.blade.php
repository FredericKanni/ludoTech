<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
        <p class="text-center">
            <form id="form" onsubmit="send()">
                <div class="row">
                    <div class="form-group col">
                        <label for="Nom du jeu">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="form-group col">
                        <label for="Nom du possesseur">Possesseur</label>
                        <input type="text" class="form-control" id="editeur" name="editeur" placeholder="Editeur" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="Console">Console</label>
                    <input type="text" class="form-control" id="console" name="console" placeholder="Console" required>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label for="Prix">Prix</label>
                        <input type="number" class="form-control" id="prix" name="prix" placeholder="Prix" required>
                    </div>
                    <div class="form-group col">
                        <label for="Nombre de joueur">Nombre de joueur</label>
                        <input type="number" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Commentaire">Commentaire</label>
                    <textarea class="form-control" id="commentaire" name="commentaire" placeholder="Commentaire" rows="3" required></textarea>
                </div>
                <p class="text-center"><input type="submit" class="btn btn-primary" value="Ajouter"></p>
            </form>
        </p>

    </div>


    <div id="list">

    </div>

    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.2.1.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>