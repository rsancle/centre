<div id="panel2">

    <div class="row">
        
        <input type="hidden" id="id" value="{{session('object')->id}}" />  
        <input type="hidden" id="asdCategory" value="1" />  

   
        <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-6 col-lg-5 pad_50 ">
                <div>
                    <input type="text" class="form-control" id="newCategory" placeholder="Nova categoria..." onkeypress="if (event.keyCode == 13) createCategory()">
                </div>
            </div>
        </div>   
       
        <div id="body_table_category">
            
        </div>
        
    </div>

</div>
