<div class="row-fluid">
<div class="span12" style="position:absolute; left:10px; top:180px;">
    
    <div id="register_form_error" class="alert alert-error"><!-- Dynamic error --></div>
    
        <form id="register-form" class="form-signin" method="post" action="<?=site_url('api/register')?>"> 
        
    <fieldset>
    <div><h5>Please enter your details below to register:</h5></div>
    <div class="control-group">
        <label class="control-label">Login name</label>
            <div class="controls">
                <input type="text" name="login" class="input-xlarge"/>
            </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input type="text" name="email" class="input-xlarge"/>
        </div>
    </div>
    
    
    <div class="control-group">
        <label class="control-label">Password</label>
            <div class="controls">
                <input type="password" name="password" class="input-xlarge" />
            </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">Confirm Password</label>
            <div class="controls">
                <input type="password" name="confirm_password" class="input-xlarge" />
            </div>
    </div>
    
    
    <div class="control-group">
        <div class="controls">
            <input type="submit" value="Register" class="btn btn-primary" />
            <a class="btn btn-success" href="<?=site_url('/')?>">Back</a>
        </div>
    </div>
    </fieldset>
</form>

    
</div>
</div>

<script type="text/javascript">
    
    $(function(){
        $("#register_form_error").hide();
        
       $("#register-form").submit(function(evt){
        evt.preventDefault();
      var url = $(this).attr('action');
      var postData = $(this).serialize();
      
      $.post(url, postData, function(o){  
        if(o.result == 1){
//              alert ('login okay');
              window.location.href = '<?=site_url('dashboard')?>';
          }else {
              $("#register_form_error").show();
              var output = '<ul>';
              for(var key in o.error){
                  var value = o.error[key];
                  output += '<li>' + value + '</li>';
              }
              output += '</ul>';
              $("#register_form_error").html(output);
        }
      },'json');
    });
    });
</script>
