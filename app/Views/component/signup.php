
    <div class="modal fadeInUp probootstrap-animated" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
            <div class="probootstrap-modal-flex">
              <div class="probootstrap-modal-figure" style="background-image: url(/img/modal_bg.jpg);"></div>
              <div class="probootstrap-modal-content">
                <form name="registForm" action="#" class="probootstrap-form">
                  <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="Email">
                  </div> 
                  <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="form-group">
                    <input name="pass_confirm" type="password" class="form-control" placeholder="Re-type Password">
                  </div> 
                  <div class="form-group clearfix mb40">
                    <label for="remember" class="probootstrap-remember"><input type="checkbox" > Remember Me</label>
                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                  </div>
                  <div class="form-group text-left">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group probootstrap-or">
                    <span><em>or</em></span>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
  // register script
  $(function() {
    document.registForm.onsubmit = function(evt) {
      let frm = evt.target;
      let formData = new FormData(frm);
      let dataObject = Object.fromEntries(formData);
      let jsonString = JSON.stringify(dataObject);

      fetch('/home/toRegister', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', "X-Requested-With": "XMLHttpRequest" },
        body: jsonString,
      }).then(res => {
          return res.json();
      }).then(res => {
          if (res.result) {
            alert('註冊成功');
            location.reload();
            // $('#signupModal').modal('hide');
          } else {
            let msg = Object.values(res.errMsg).join('\n');
            alert(msg);
          }
      });

      evt.preventDefault();
    };
  });
</script>