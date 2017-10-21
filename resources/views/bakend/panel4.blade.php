<div id="panel4">

    <div class="row">
        
        <input type="hidden" id="id" value="{{session('object')->id}}" />  
   
        <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-6 col-lg-5 pad_50 ">
                <div>
                    <input type="text" class="form-control" id="newEvent" placeholder="Titol del esdeveniment..." onkeypress="if (event.keyCode == 13) createEvent()">
                </div>
            </div>
        </div>   
       
        <div id="body_table_event">
            
        </div>
        
    </div>

</div>
