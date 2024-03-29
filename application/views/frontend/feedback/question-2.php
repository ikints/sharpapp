<div class="container-feedback">
  <div class="feedback">
      <div class="bg_feedback">
        <div class="container">
          <div class="bg-question-form">
            <div class="row d-flex h-100 justify-content-center">
              <div class="col-12 from-qs-1">
                  <form action="<?= base_url(); ?>feedback/question-3" method="post" class="needs-validation" novalidate>
                    <input type="hidden" name="fb_name" value="<?php echo $fb_name; ?>">
                    <input type="hidden" name="fb_email" value="<?php echo $fb_email; ?>">
                    <input type="hidden" name="fb_phone" value="<?php echo $fb_phone; ?>">
                    <!-- FB-Q -->
                    <input type="hidden" name="fb_q1" value="<?php echo $fb_q1; ?>">

                        <div class="card-feedback text-center">
                          <div class="form-group m-t-20">
                            <label for="validationCustom01" class="title-question text-center">Sudah cukupkah kenyamanan yang ada di dalam pameran ini?</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fb_q2" id="fb_q21" value="1" checked>
                            <label class="form-check-label label-feedback" for="fb_q21">
                              Istimewa
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fb_q2" id="fb_q22" value="2">
                            <label class="form-check-label label-feedback" for="fb_q22">
                              Baik
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fb_q2" id="fb_q22" value="3">
                            <label class="form-check-label label-feedback" for="fb_q22">
                              Cukup
                            </label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fb_q2" id="fb_q22" value="4">
                            <label class="form-check-label label-feedback" for="fb_q22">
                              Kurang
                            </label>
                          </div>
                        </div>
                        <div class="text-center">
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
