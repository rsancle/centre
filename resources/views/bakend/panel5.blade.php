<div id="panel5">

    <form enctype="multipart/form-data" accept-charset="UTF-8" id="newFormEvent" role="form" method="get" action="{{ URL::asset('create/event') }}" >

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="row">  
       
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="name">Nom</label>  
                        <div class="col-md-4">
                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="category">Categoria</label>  
                        <div class="col-md-4">
                            <select id="category" name="category" class="form-control">
                                <option value=""></option>
                            </select>
                        </div> 
                    </div>

                </div>
            </div> 

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="title">Titol</label>  
                        <div class="col-md-4">
                            <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="gender">Gènere</label>  
                        <div class="col-md-4">
                            <input id="gender" name="gender" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="description">Descripció</label>  
                        <div class="col-md-4">
                            <textarea id="description" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>
            </div> 

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="director">Direcció</label>  
                        <div class="col-md-4">
                            <input id="director" name="director" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="regidor">Regidor</label>  
                        <div class="col-md-4">
                            <input id="regidor" name="regidor" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="iluminacio">Llums</label>  
                        <div class="col-md-4">
                            <input id="iluminacio" name="iluminacio" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="sound">So</label>  
                        <div class="col-md-4">
                            <input id="sound" name="sound" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="vestuari">Vestuari</label>  
                        <div class="col-md-4">
                            <input id="vestuari" name="vestuari" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="perruquerria">Perruqueria i Maq.</label>  
                        <div class="col-md-4">
                            <input id="perruquerria" name="perruquerria" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="tramoies">Tramoies</label>  
                        <div class="col-md-4">
                            <input id="tramoies" name="tramoies" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="altres">Altres</label>  
                        <div class="col-md-4">
                            <input id="altres" name="altres" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="actors">Repartiment</label>  
                        <div class="col-md-10">
                            <textarea id="actors" name="actors" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="status">Estat</label>  
                        <div class="col-md-2">
                            <label class="switch">
                              <input id="status" name="status" value="1" type="checkbox">
                              <span class="slider round"></span>
                            </label>
                        </div>
                        <label class="col-md-2 control-label" for="outstanding">Destacat</label>  
                        <div class="col-md-2">
                            <label class="switch">
                              <input id="outstanding" name="outstanding" value="1" type="checkbox">
                              <span class="slider round"></span>
                            </label>
                        </div>
                        <label class="col-md-2 control-label" for="break">Descanç</label>  
                        <div class="col-md-2">
                            <label class="switch">
                              <input id="break" name="break" value="1" type="checkbox">
                              <span class="slider round"></span>
                            </label>
                        </div> 
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="chairs">Cadires</label>  
                        <div class="col-md-2">
                            <input id="chairs" name="chairs" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="language">Idioma</label>  
                        <div class="col-md-2">
                            <input id="language" name="language" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="time">Durada</label>  
                        <div class="col-md-2">
                            <input id="time" name="time" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="date1">Horari 1</label>  
                        <div class="col-md-4">
                            <input id="date1" name="date1" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="date2">Horari 2</label>  
                        <div class="col-md-4">
                            <input id="date2" name="date2" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="date3">Horari 3</label>  
                        <div class="col-md-4">
                            <input id="date3" name="date3" type="text" placeholder="" class="form-control input-md">
                        </div>
                        <label class="col-md-2 control-label" for="date4">Horari 4</label>  
                        <div class="col-md-4">
                            <input id="date4" name="date4" type="text" placeholder="" class="form-control input-md">
                        </div>
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group">
                          
                        <div class="col-md-6 center">
                            <label class="control-label" for="imagefirst">Cartell</label>
                            <input id="imagefirst" name="imagefirst" class="input-file" type="file">
                        </div>
                         
                        <div class="col-md-6 center">
                            <label class="control-label" for="imagesecond">Destacat</label> 
                            <input id="imagesecond" name="imagesecond" class="input-file" type="file">
                        </div>
                    </div>

                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 newEvent ">

                    <div class="form-group center">
                        <button type="submit" class="btn btn-success">Registrar</button>
                    </div>

                </div>
            </div>


        </div>

    </from>

</div>
