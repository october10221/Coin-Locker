<style>
.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
    background-color: gray;
}
</style>


<!-- modal เช่า -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Coin Locker <span id="numberlocker"></span> </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="rentlocker">
          @csrf  
          <input type="hidden" name="user" value="{{ auth()->user()->name }}">
          <input type="hidden" name="namelocker" id="namelocker">
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <label>Your Point</label>
                    <input type="number" name="yourpoint" id="yourpoint" class="form-control validate" readonly>
                    <label>Your Time (Hour)</label>
                    <input type="number" name="hour" id="hour" class="form-control validate" readonly>
                </div>
                <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix grey-text"></i>
                        <label>Coin : </label>
                        <button type="button" onclick="calpoint(1)" class="btn btn-circle">1</button> &nbsp
                        <button type="button" onclick="calpoint(2)" class="btn btn-circle">2</button> &nbsp
                        <button type="button" onclick="calpoint(5)" class="btn btn-circle">5</button> &nbsp
                        <button type="button" onclick="calpoint(10)" class="btn btn-circle">10</button> &nbsp
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <label>Bill : </label>
                    <button type="button" onclick="calpoint(20)" class="btn btn-secondary">20</button> &nbsp
                    <button type="button" onclick="calpoint(50)" class="btn btn-secondary">50</button> &nbsp
                    <button type="button" onclick="calpoint(100)" class="btn btn-secondary">100</button> &nbsp
                    <button type="button" onclick="calpoint(500)" class="btn btn-secondary">500</button> &nbsp
                    <button type="button" onclick="calpoint(1000)" class="btn btn-secondary">1000</button> &nbsp
                </div>

                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <button type="button" onclick="clearcoin()" class="btn btn-danger">Clear Coin</button>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                 <button class="btn btn-deep-orange">Submit</button>
            </div>
         </form>
    </div>
  </div>
</div>
