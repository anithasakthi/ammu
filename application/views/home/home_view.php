<div class="row-fluid">
<div class="span12" style="position:absolute; left:10px; top:180px;">
    <form id="login-form" class="form-singin" method="post" action="<?=site_url('api/login')?>"> 
        
    <fieldset>
    <div><h5>Please enter your Username and Password below</h5></div>
    <div class="control-group">
        <label class="control-label">Username</label>
            <div class="controls">
                <input type="text" name="login" class="input-xlarge"/>
            </div>
    </div>
    
    <div class="control-group">
        <label class="control-label">Password</label>
            <div class="controls">
                <input type="password" name="password" class="input-xlarge" />
            </div>
    </div>
    
    <div class="control-group">
        <div class="controls">
            <input type="submit" value="login" class="btn btn-primary" />
            <a class="btn btn-success" href="<?=site_url('home/register')?>">Register</a></label>
        </div>
    </div>
    </fieldset>
</form>


</div>
</div>

<script type="text/javascript">
    $(function(){
       $("#login-form").submit(function(evt){
        evt.preventDefault();
      var url = $(this).attr('action');
      var postData = $(this).serialize();
      
      $.post(url, postData, function(o){  
        if(o.result == 1){
//              alert ('login okay');
              window.location.href = '<?=site_url('dashboard')?>';
          }else {
              alert('Invalid Login');
              
        }
      },'json');
    });
    });
</script>
    