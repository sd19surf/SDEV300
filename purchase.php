<?php

include "includes/header.php";

$result = updatePurchaseAndUser();
			
print_r($result);
?>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseModal">Purchase</button>

<div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby=">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Purchase Complete!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Thank you for your purchase, come again soon!</p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" onClick="window.location.href='includes/logout.php';" class="btn btn-primary">Logout</button>
      </div>
    </div>
  </div>
</div>

<?php
include "includes/footer.php";
?>