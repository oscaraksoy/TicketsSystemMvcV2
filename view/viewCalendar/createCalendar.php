<?php include URL_VIEW . "navbar.php" ?>

<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row jusify-content-center">

                <div class="col-md-6">
                    <form action="<?= FRONT_VIEW ?>calendar/method/" method="post">

                        <div class="form-group">
                            <label>Fecha Inicio</label>
                            <input class="form-control" type="date" value="2011-08-19" id="">
                        </div>

                        <div class="form-group">
                            <label>Fecha Fin</label>
                            <input class="form-control" type="date" value="2011-08-19" id="">
                        </div>

                        <div class="form-group">
                            <label for="inlineFormCustomSelect">Elegir evento</label>
                            <select class="custom-select mr-sm-1" id="inlineFormCustomSelect">
                                <option selected>Elija un evento...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inlineFormCustomSelect">Elegir Artista</label>
                            <select class="custom-select mr-sm-1" id="inlineFormCustomSelect">
                                <option selected>Elija un Artista...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Aceptar</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<br><br><br><br><br><br>
