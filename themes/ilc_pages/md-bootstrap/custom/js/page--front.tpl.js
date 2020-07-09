function removeClass(){
                document.getElementById('edit-name').classList.remove('form-text');
                document.getElementById('edit-pass').classList.remove('form-text');
                document.body.classList.remove('sitewide-front');
        }
$('.modal').on('shown.bs.modal', function() {
  $(this).find('[autofocus]').focus();
});
//Accept Privacy policy
   $(document).on('click','.btn-accept-policy', function(e){
           e.preventDefault();
           footer_data_privacy('accepted');
   });
//Load Footer Data Privacy
footer_data_privacy('');
function footer_data_privacy(datas){
    $.ajax({
            type: 'POST',
            url: '/user_accept_policy.php',
            data: {
                    accept: (datas == '') ? '' : datas
            },
            datatype:'JSON',
            cache: false,
            success: function(data){
                    var ddata = JSON.parse(data);
                    var dhtml = '<div class="agreement-policy" style="width: 100%;background-color:#252525; color: rgb(255, 255, 255);text-align:center;padding: 1rem;position: fixed;bottom:0;opacity:0.8;">'
                        + '<p style="font-size:11pt !important;margin:0px;">By clicking "Accept" or continuing to use our site, you agree to the university\'s Acceptable Use Policy and this site\'s terms and conditions.</p>'
                        + '<span class="btn-accept-policy" style="height:3rem;width:6rem;background-color:#fff;color:#000;margin:0;padding:.3rem;cursor:pointer;">Accept</span>'
                        + '<a href="https://upd.edu.ph/aup/" target="_blank" class="btn-uap" style="height:3rem;width:6rem;background-color:#fff;color:#000;margin:0;margin-left:2px;padding:.3rem;cursor:pointer;">Acceptable Use Policy</a></div>';
                        if(ddata.privacy == 1){
                                $('.privacy-content').hide();
                        } else {
                                $('.privacy-content').html(dhtml).show();
                        }
                    console.log(data);
            },
            error: function(data){
                    console.log(data);
            }
    });
};

