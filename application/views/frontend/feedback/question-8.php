<div class="container-feedback">
  <div class="feedback">
      <div class="bg_feedback">
        <div class="container">
          <div class="bg-question-form">
            <div class="row d-flex h-100 justify-content-center">
              <div class="col-12 from-qs-1">
              <div class="col-md-12">
              <form action="<?= base_url(); ?>feedback/question-9" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="fb_name" value="<?php echo $fb_name; ?>">
            <input type="hidden" name="fb_email" value="<?php echo $fb_email; ?>">
            <input type="hidden" name="fb_phone" value="<?php echo $fb_phone; ?>">
            <!-- FB-Q -->
            <input type="hidden" name="fb_q1" value="<?php echo $fb_q1; ?>">
            <input type="hidden" name="fb_q2" value="<?php echo $fb_q2; ?>">
            <input type="hidden" name="fb_q3" value="<?php echo $fb_q3; ?>">
            <input type="hidden" name="fb_q4" value="<?php echo $fb_q4; ?>">
            <input type="hidden" name="fb_q5" value="<?php echo $fb_q5; ?>">
            <input type="hidden" name="fb_q6" value="<?php echo $fb_q6; ?>">
            <input type="hidden" name="fb_q7" value="<?php echo $fb_q7; ?>">

                <div class="card-feedback text-center">
                  <div class="form-group m-t-20">
                    <label for="validationCustom01" class="title-question text-center">Apakah Anda berminat untuk hadir ke pameran berikutnya?</label>
                  </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q8" id="fb_q61" value="1" checked>
                        <label class="form-check-label label-feedback-q8" for="fb_q61">
                          Ya
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="fb_q8" id="fb_q62" value="0">
                        <label class="form-check-label label-feedback-q8" for="fb_q62">
                          Tidak
                        </label>
                      </div>
                </div>
                <div class="btn-feedback-note text-center">
                  <button type="submit" class="btn btn-danger">NEXT</button>
                </div>
          </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
