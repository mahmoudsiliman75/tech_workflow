<!-- START:: INCLUDING HEADER -->
<?php include('layouts/header.php') ?>
<!-- END:: INCLUDING HEADER -->

	<!-- START:: CONTENT -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!-- START:: URGENT TASKS SECTION -->
    <div class="kt-portlet rounded justify-content-between">

      <div class="kt-portlet__head kt-shape-bg-color-1">
        <div class="kt-portlet__head-label d-flex justify-content-center w-100">
          <h2 class="kt-portlet__head-title kt-font-boldest"> الصفحة الشخصية </h2>
        </div>
      </div>

      <div class="kt-portlet__body">
        <div class="container mb-4">
          <div class="row justify-content-center align-items-center">
            <div class="col-8">
              <!-- START:: USER CARD -->
              <div class="card user_card">
                <img src="assets/pics/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <!-- START:: LIST GROUP -->
                  <div class="kt-demo">
                    <div class="kt-demo__preview">
                      <div class="kt-list-timeline">
                        <div class="kt-list-timeline__items">
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <i class="kt-list-timeline__icon kt-font-info la la-user"></i>
                            <span class="kt-list-timeline__text">محمود سليمان (Front-End Developer) </span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <span class="kt-list-timeline__icon flaticon2-position kt-font-info"></span>
                            <span class="kt-list-timeline__text">Scheduled system reboot completed</span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <span class="kt-list-timeline__icon flaticon2-lock kt-font-info"></span>
                            <span class="kt-list-timeline__text">New order has been planced and pending for processing</span>
                          </div>
                          <div class="kt-list-timeline__item">
                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                            <span class="kt-list-timeline__icon flaticon2-note kt-font-info"></span>
                            <span class="kt-list-timeline__text">Database server overloaded 80% and requires quick reboot</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END:: LIST GROUP -->
                </div>
              </div>
              <!-- END:: USER CARD -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END:: URGENT TASKS SECTION -->

	</div>
  <!-- END:: CONTENT -->

<!-- START:: INCLUDING FOOTER -->
<?php include('layouts/footer.php') ?>
<!-- END:: INCLUDING FOOTER -->