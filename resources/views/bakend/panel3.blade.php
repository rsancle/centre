<div id="panel3">

    <div class="row">
        
        <input type="hidden" id="id" value="{{session('object')->id}}" />  
   
        <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-6 col-lg-5 pad_50 ">
                <div>
                    <input type="text" class="form-control" id="newActivity" placeholder="Nova activitat..." onkeypress="if (event.keyCode == 13) createActivity()">
                </div>
            </div>
        </div>   
       
        <div id="body_table_activity">
            
        </div>
        
    </div>

</div>
