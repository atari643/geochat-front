<form class="publish">
    <div class="alert alert-success message-posted">
        Message publié!
    </div>
    <div class="alert alert-danger message-errors">
    </div>
    <div class="mb-3">
        <label for="addressInput" class="form-label">Message:</label>
        <textarea class="form-control" name="text">Bonjour tout le monde!</textarea>
    </div>
    <div class="mb-3">
        <label for="addressInput" class="form-label">Adresse:</label>
        <input type="text" class="form-control" name="address" value="25 rue Sainte Catherine, Bordeaux">
    </div>

    <input type="submit" href="#" class="publish btn btn-primary" value="Publier" />
</form>

<script type="text/javascript" src="js/post.js"></script>