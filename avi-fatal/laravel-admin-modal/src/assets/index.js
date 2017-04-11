

function LaravelAdminModal() {

$(document).ready(function(){
$(document).on('pjax:afterSend', function(a,b) {
  console.log(a,b);
});
})


    var str =  `<div class='modal fade'>
                    <div class='modal-dialog modal-lg'>
                      <div class='modal-content'>
                        <div class='modal-body'>dfjkhjkhdsfds</div>
                        <div class='modal-footer'>
                          <button class='btn btn-default'>Close</button>
                        </div>
                      </div>
                    </div>
                  </div>`;

    this.showModal = function(url){
        var modal = $(str);
        $.get(url);
        modal.modal('show');

    }
}
