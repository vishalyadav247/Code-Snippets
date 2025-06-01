<?php

/**
 * Template Name: Review Customer
 */
get_header();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
  <!-- inter font family cdn -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <!-- product sans font family cdn -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/lehladdak/review/review.css" />

</head>

<body>
  <section>
    <div class="main-review-section">
      <div class="review-section1">
        <div class="sub-review-section">
          <div class="review-rating-box">
            <div>
              <h1 class="pb-15">Customer Reviews</h1>
              <p>Powered by <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="96" height="28" viewBox="0 0 49 16" fill="none" style="position:relative;top:8px;">
                <path d="M34.4475 10.6136C35.4079 10.3334 35.9708 9.50786 35.9708 8.37955C35.9708 7.68766 35.7825 7.14344 35.4022 6.73677C34.2937 5.55119 32.4105 6.06354 31.9411 7.67847C31.7487 8.34021 31.749 8.39072 31.9498 9.11295C32.1296 9.75952 32.6976 10.4294 33.1487 10.5267C33.2825 10.5556 33.4795 10.6169 33.5866 10.663C33.8574 10.7796 33.8838 10.7781 34.4475 10.6136ZM32.7052 15.8352C31.6961 15.5056 30.784 14.7288 30.3059 13.7918C30.1687 13.523 30.2379 13.4674 31.1412 13.1204C31.7773 12.8761 31.9809 12.849 31.9809 13.0086C31.9809 13.2403 32.5861 13.8627 33.0011 14.0578C33.8314 14.4481 34.9232 14.214 35.4413 13.5347C35.6804 13.2213 35.8933 12.3877 35.8544 11.9177L35.8337 11.6679L35.44 11.9423C34.88 12.3328 33.954 12.5045 33.1973 12.3582C32.2921 12.1833 31.7189 11.8818 31.1118 11.2614C30.4707 10.6061 30.1946 10.0753 29.9936 9.11111C29.5909 7.17974 30.8166 5.11319 32.729 4.49919C33.7007 4.18724 35.063 4.38811 35.6377 4.92806L35.8587 5.13561L35.8904 4.858L35.9222 4.5804H36.798H37.6739L37.7023 8.47305C37.7322 12.5628 37.6877 13.1219 37.2634 13.9918C36.8433 14.853 36.0286 15.5313 35.0281 15.8528C34.3963 16.0558 33.3564 16.048 32.7052 15.8352Z" fill="#4286F5"></path>
                <path d="M17.7986 10.3038C18.552 9.78178 18.9197 8.64702 18.654 7.66455C18.4325 6.84576 17.4903 6.08868 16.6929 6.08868C15.4066 6.08868 14.4709 7.03818 14.4659 8.34851C14.4619 9.39304 15.1085 10.3564 15.961 10.5759C16.5139 10.7183 17.3871 10.589 17.7986 10.3038ZM15.8473 12.3546C14.3061 12.0799 13.188 11.074 12.6613 9.48829C12.418 8.75581 12.499 7.48715 12.8351 6.76864C13.5584 5.22184 14.9342 4.33396 16.5993 4.33938C19.772 4.3497 21.6488 7.57149 20.158 10.4486C19.7317 11.2713 18.5145 12.1486 17.5541 12.3252C16.695 12.4833 16.5802 12.4852 15.8473 12.3546Z" fill="#EA4235"></path>
                <path d="M43.3657 8.00376C43.725 7.84389 43.5923 7.88729 43.6555 7.88559C43.7187 7.88389 44.1237 7.70941 44.4706 7.54884C44.8176 7.38827 45.1709 7.25689 45.256 7.25689C45.341 7.25689 44.8405 7.47241 44.8405 7.42997C44.8405 7.38753 45.6516 7.02061 45.9464 6.92043C46.4672 6.74339 46.4774 6.73302 46.3115 6.54971C45.8213 6.00801 44.8303 5.90002 44.1707 6.31642C43.6359 6.654 43.2095 7.22721 43.1271 7.71915C43.0532 8.16047 43.0176 8.15859 43.3657 8.00376ZM44.3887 12.3534C42.8501 11.9923 41.8414 11.0207 41.3307 9.40766C41.1922 8.97044 41.1969 7.70104 41.3385 7.2638C41.9353 5.42147 43.2913 4.3374 44.9992 4.3374C45.9743 4.3374 46.7797 4.66853 47.4793 5.35703C47.9795 5.84933 48.622 6.9254 48.622 7.27091C48.622 7.49437 48.5055 7.56187 47.3082 8.03204C46.3454 8.41014 45.8807 8.60059 45.1186 8.9296C44.9848 8.98737 44.7877 9.07017 44.6806 9.11361C44.5736 9.15705 44.2889 9.2769 44.0481 9.37995C43.8072 9.48299 43.5488 9.58611 43.4739 9.60909C43.24 9.68084 44.0448 10.4324 44.486 10.5543C45.3532 10.7939 46.1163 10.6291 46.721 10.0717C46.9489 9.86165 47.18 9.6898 47.2347 9.6898C47.3996 9.6898 48.6185 10.5091 48.6203 10.6212C48.6236 10.8283 47.7693 11.6089 47.2046 11.9148C46.6867 12.1953 45.4994 12.529 45.1186 12.5011C45.0383 12.4952 44.7098 12.4288 44.3887 12.3534Z" fill="#EA4235"></path>
                <path d="M5.07284 12.3122C3.8851 12.1224 2.73864 11.4937 1.73598 10.4824C1.03217 9.77247 0.569468 9.02231 0.181679 7.96248C-0.0648798 7.28864 -0.059185 5.06741 0.19085 4.38569C0.981351 2.23038 2.49459 0.7842 4.63491 0.138552C5.31501 -0.0666056 7.47747 -0.0378284 8.08965 0.184526C9.01776 0.521633 10.154 1.17809 10.4715 1.56057C10.5878 1.70071 10.5285 1.79604 9.98209 2.34731C9.64015 2.69232 9.33722 2.97454 9.30891 2.97448C9.28061 2.97441 9.13009 2.86484 8.97444 2.73098C8.16815 2.03756 6.61786 1.67083 5.44347 1.8957C4.1061 2.15178 2.99691 2.99868 2.37379 4.23951C2.06193 4.86052 1.85942 4.89665 1.85942 6.18604C1.85942 7.41104 2.07384 7.53783 2.31962 8.06238C2.4646 8.3718 2.83282 8.88663 3.13789 9.20647C4.25112 10.3736 5.8783 10.8327 7.43494 10.419C8.30827 10.1868 8.68239 9.98712 9.22747 9.4621C9.70415 9.00298 10.0148 8.43402 10.125 7.81812L10.19 7.45521L8.21532 7.42885L6.24064 7.40249V6.49378V5.58507L9.06281 5.59316C10.615 5.59761 11.9118 5.60145 11.9445 5.60169C11.9773 5.60201 12.0512 5.83675 12.1088 6.12349C12.3256 7.20292 11.9278 8.83788 11.1644 10.005C10.5356 10.9663 9.86257 11.4851 8.43025 12.1127C7.83619 12.373 6.0989 12.4762 5.07284 12.3122Z" fill="#4185F4"></path>
                <path d="M25.9768 10.5501C26.4296 10.4367 27.0372 9.86631 27.2598 9.34552C27.3491 9.13687 27.4925 8.73528 27.4714 8.33403C27.4411 7.7611 27.3194 7.35385 27.1993 7.20849C26.6924 6.59443 26.4269 6.36931 26.0549 6.23808C25.2219 5.94417 24.4467 6.10495 23.8199 6.70162C22.5943 7.86824 23.0645 10.0341 24.6606 10.5746C25.118 10.7295 25.272 10.7267 25.9768 10.5501ZM24.2978 12.3143C23.2644 12.0962 22.185 11.2743 21.6954 10.3328C20.8797 8.76395 21.0869 6.94473 22.2249 5.68515C23.8484 3.88811 26.7104 3.88892 28.3642 5.68688C29.7871 7.23373 29.6396 10.0417 28.0646 11.3899C27.3139 12.0325 26.5831 12.322 25.5988 12.3664C25.1214 12.388 24.536 12.3645 24.2978 12.3143Z" fill="#FABC05"></path>
                <path d="M38.6957 6.28343V0.340088L39.6445 0.367943L40.5933 0.395793V6.28343V12.1711L39.6445 12.1989L38.6957 12.2268V6.28343Z" fill="#34A853"></path>
              </svg>
              </span></p>
            </div>
            <div class="rating-box">
              <span class="rating-number averageRating"></span> <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" viewBox="0 0 30 28" fill="none">
<path d="M15.5104 23.2794C15.1958 23.0926 14.8042 23.0926 14.4896 23.2794L7.11175 27.6588C6.35155 28.1101 5.42269 27.4253 5.6289 26.5656L7.58766 18.4001C7.67546 18.0341 7.55029 17.6498 7.26376 17.4057L0.82376 11.919C0.147583 11.3429 0.502136 10.237 1.38722 10.1614L9.90498 9.43427C10.2715 9.40299 10.5912 9.17303 10.7375 8.83554L14.0825 1.11717C14.4305 0.314027 15.5695 0.314026 15.9175 1.11717L19.2625 8.83554C19.4088 9.17303 19.7285 9.40299 20.095 9.43427L28.6201 10.162C29.5041 10.2375 29.8593 11.3413 29.1852 11.9182L22.771 17.4071C22.4865 17.6505 22.3618 18.0325 22.448 18.3969L24.3812 26.5743C24.5842 27.4331 23.6564 28.1148 22.8975 27.6643L15.5104 23.2794Z" fill="white"/>
</svg></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="main-review-section">
      <div class="review-section2">
        <div class="sub-review-section">
          <div class="grid-two-one-layout">
            <div class="grid-two-layout">
              <div class="flex-between pb-20">
                <div class="total-review-text">
                  <p><span class="ratingCount"></span> Reviews</p>
                </div>
                <div class="write-review-box">
                  <a href="javascript:void(0)">
                    <button class="write-review-btn" onclick="openPopup()">
                      <span><i class="fa fa-pen"></i></span><span></span>Write a review
                    </button>
                  </a>
                  <!-- Popup Html -->
                  <div id="popup" class="popup-container">
                    <div class="popup-content">
                      <div class="pb-15 popup-flex">
                        <div>
                          <h2 class="upload-popup-h2">Write a Review</h2>
                        </div>
                        <div>
                          <img src="/wp-content/themes/lehladdak/review/images/cross.png" onclick="closePopup()" alt="" class="closePopup" />
                        </div>
                      </div>
                      <div style="margin-bottom:35px;"></div>
                      <?php echo FrmFormsController::get_form_shortcode(array('id' => 2)); ?>
                    </div>
                  </div>
                  <!-- End Pop Html -->
                </div>
              </div>
              <p class="sort-by-txt pb-15">Sort by</p>
              <div class="d-flex sort-by-box pb-30">
                <a href="javascript:void(0)" class="sort-option active-short-option" id="Newest">Newest</a>
                <a href="javascript:void(0)" class="sort-option" id="highestRating">Highest</a>
                <a href="javascript:void(0)" class="sort-option" id="lowestRating">Lowest</a>
              </div>
              <hr class="mb-40 hr-css" />

              <!-- All reviews are rendering inside this wrapper -->
              <div class="formidable-entries-container" id="reviewsWrapper">
              </div>
              <!-- Pagination Controls -->
              <div class="review pagination">
                  <button id="prevPage">« Previous</button>
                  <span id="pagesContainer"></span> <!-- Container for page numbers -->
                  <button id="nextPage">Next »</button>
              </div>

            </div>
            <div class="grid-one-layout">
              <div class="grid-one-border-css">
                <div class="pb-30 map-img-box">
                  <div><img class="img-fluid" src="/wp-content/themes/lehladdak/review/images/image8.jpg" alt="" /></div>
                  <div><img class="img-fluid" src="/wp-content/themes/lehladdak/review/images/map-image.jpg" alt="" /></div>
                </div>
                <p class="website-name pb-10">esikkim Tourism</p>
                <div class="d-flex website-guide-btn pb-20">
                  <a href="https://www.esikkimtourism.in/" target="_blank"><button>Website</button></a>
                  <a href="https://maps.app.goo.gl/tLvvc6h5wQ9ZX2py9" target="_blank"><button>Directions</button></a>
                  <a href="tel:+91 7838-052-199 "><button>Call</button></a>
                </div>
                <div class="flex-align-center gap-15 pb-15">
                  <div>
                    <p class="website-rating averageRating"></p>
                  </div>
                  <div>
                    <div class="flex-align-center">
                      <!-- <span>
                        <i class="fa fa-star-o fa-lg yellow-star"></i>
                        <i class="fa fa-star-o fa-lg yellow-star"></i>
                        <i class="fa fa-star-o fa-lg yellow-star"></i>
                        <i class="fa fa-star-o fa-lg yellow-star"></i>
                        <i class="fa fa-star-o fa-lg yellow-star"></i>
                      </span> -->
                      <span class="stars averageRatingStars"></span>
                    </div>
                  </div>
                  <p class="website-total-reviews"><span class="ratingCount"></span> Google reviews</p>
                </div>
                <div class="website-location-box">
                  <p><strong>Service options: </strong> Online appointments · On-site services</p>
                  <p><strong>Address:</strong> Gh-9/531, GH-9 Block, Paschim Vihar, Delhi, 110087</p>
                  <p>
                    <strong>Hours: </strong> <span class="company-open-status"> Open </span> ⋅
                    <span class="time-span">
                      Closes 9 pm <span><i class="fa fa-caret-down"></i> </span>
                    </span>
                  </p>
                  <ul class="time-para" style="display: none;">
                    <li>
                      <div><strong>Hours:Monday</strong></div>
                      <div><strong>9 am - 11 pm</strong></div>
                    </li>
                    <li>
                      <div>Tuesday</div>
                      <div>9 am - 11 pm</div>
                    </li>
                    <li>
                      <div>Wednesday</div>
                      <div>9 am - 11 pm</div>
                    </li>
                    <li>
                      <div>Thursday</div>
                      <div>9 am - 11 pm</div>
                    </li>
                    <li>
                      <div>Friday</div>
                      <div>9 am - 11 pm</div>
                    </li>
                    <li>
                      <div>Saturday</div>
                      <div>9 am - 11 pm</div>
                    </li>

                    <li>
                      <div>Sunday</div>
                      <div>Closed</div>
                    </li>
                    <li><a class="text-blue">Suggest new hours</a></li>
                  </ul>
                  <p><strong>Phone: </strong> 078380 52199</p>
                </div>
                <p class="powerd-by">
                  Powered by <span> <svg xmlns="http://www.w3.org/2000/svg" width="49" height="16" viewBox="0 0 49 16" fill="none" style='position:relative;top:3px;'>
<path d="M34.4475 10.6136C35.4079 10.3334 35.9708 9.50786 35.9708 8.37955C35.9708 7.68766 35.7825 7.14344 35.4022 6.73677C34.2937 5.55119 32.4105 6.06354 31.9411 7.67847C31.7487 8.34021 31.749 8.39072 31.9498 9.11295C32.1296 9.75952 32.6976 10.4294 33.1487 10.5267C33.2825 10.5556 33.4795 10.6169 33.5866 10.663C33.8574 10.7796 33.8838 10.7781 34.4475 10.6136ZM32.7052 15.8352C31.6961 15.5056 30.784 14.7288 30.3059 13.7918C30.1687 13.523 30.2379 13.4674 31.1412 13.1204C31.7773 12.8761 31.9809 12.849 31.9809 13.0086C31.9809 13.2403 32.5861 13.8627 33.0011 14.0578C33.8314 14.4481 34.9232 14.214 35.4413 13.5347C35.6804 13.2213 35.8933 12.3877 35.8544 11.9177L35.8337 11.6679L35.44 11.9423C34.88 12.3328 33.954 12.5045 33.1973 12.3582C32.2921 12.1833 31.7189 11.8818 31.1118 11.2614C30.4707 10.6061 30.1946 10.0753 29.9936 9.11111C29.5909 7.17974 30.8166 5.11319 32.729 4.49919C33.7007 4.18724 35.063 4.38811 35.6377 4.92806L35.8587 5.13561L35.8904 4.858L35.9222 4.5804H36.798H37.6739L37.7023 8.47305C37.7322 12.5628 37.6877 13.1219 37.2634 13.9918C36.8433 14.853 36.0286 15.5313 35.0281 15.8528C34.3963 16.0558 33.3564 16.048 32.7052 15.8352Z" fill="#4286F5"/>
<path d="M17.7986 10.3038C18.552 9.78178 18.9197 8.64702 18.654 7.66455C18.4325 6.84576 17.4903 6.08868 16.6929 6.08868C15.4066 6.08868 14.4709 7.03818 14.4659 8.34851C14.4619 9.39304 15.1085 10.3564 15.961 10.5759C16.5139 10.7183 17.3871 10.589 17.7986 10.3038ZM15.8473 12.3546C14.3061 12.0799 13.188 11.074 12.6613 9.48829C12.418 8.75581 12.499 7.48715 12.8351 6.76864C13.5584 5.22184 14.9342 4.33396 16.5993 4.33938C19.772 4.3497 21.6488 7.57149 20.158 10.4486C19.7317 11.2713 18.5145 12.1486 17.5541 12.3252C16.695 12.4833 16.5802 12.4852 15.8473 12.3546Z" fill="#EA4235"/>
<path d="M43.3657 8.00376C43.725 7.84389 43.5923 7.88729 43.6555 7.88559C43.7187 7.88389 44.1237 7.70941 44.4706 7.54884C44.8176 7.38827 45.1709 7.25689 45.256 7.25689C45.341 7.25689 44.8405 7.47241 44.8405 7.42997C44.8405 7.38753 45.6516 7.02061 45.9464 6.92043C46.4672 6.74339 46.4774 6.73302 46.3115 6.54971C45.8213 6.00801 44.8303 5.90002 44.1707 6.31642C43.6359 6.654 43.2095 7.22721 43.1271 7.71915C43.0532 8.16047 43.0176 8.15859 43.3657 8.00376ZM44.3887 12.3534C42.8501 11.9923 41.8414 11.0207 41.3307 9.40766C41.1922 8.97044 41.1969 7.70104 41.3385 7.2638C41.9353 5.42147 43.2913 4.3374 44.9992 4.3374C45.9743 4.3374 46.7797 4.66853 47.4793 5.35703C47.9795 5.84933 48.622 6.9254 48.622 7.27091C48.622 7.49437 48.5055 7.56187 47.3082 8.03204C46.3454 8.41014 45.8807 8.60059 45.1186 8.9296C44.9848 8.98737 44.7877 9.07017 44.6806 9.11361C44.5736 9.15705 44.2889 9.2769 44.0481 9.37995C43.8072 9.48299 43.5488 9.58611 43.4739 9.60909C43.24 9.68084 44.0448 10.4324 44.486 10.5543C45.3532 10.7939 46.1163 10.6291 46.721 10.0717C46.9489 9.86165 47.18 9.6898 47.2347 9.6898C47.3996 9.6898 48.6185 10.5091 48.6203 10.6212C48.6236 10.8283 47.7693 11.6089 47.2046 11.9148C46.6867 12.1953 45.4994 12.529 45.1186 12.5011C45.0383 12.4952 44.7098 12.4288 44.3887 12.3534Z" fill="#EA4235"/>
<path d="M5.07284 12.3122C3.8851 12.1224 2.73864 11.4937 1.73598 10.4824C1.03217 9.77247 0.569468 9.02231 0.181679 7.96248C-0.0648798 7.28864 -0.059185 5.06741 0.19085 4.38569C0.981351 2.23038 2.49459 0.7842 4.63491 0.138552C5.31501 -0.0666056 7.47747 -0.0378284 8.08965 0.184526C9.01776 0.521633 10.154 1.17809 10.4715 1.56057C10.5878 1.70071 10.5285 1.79604 9.98209 2.34731C9.64015 2.69232 9.33722 2.97454 9.30891 2.97448C9.28061 2.97441 9.13009 2.86484 8.97444 2.73098C8.16815 2.03756 6.61786 1.67083 5.44347 1.8957C4.1061 2.15178 2.99691 2.99868 2.37379 4.23951C2.06193 4.86052 1.85942 4.89665 1.85942 6.18604C1.85942 7.41104 2.07384 7.53783 2.31962 8.06238C2.4646 8.3718 2.83282 8.88663 3.13789 9.20647C4.25112 10.3736 5.8783 10.8327 7.43494 10.419C8.30827 10.1868 8.68239 9.98712 9.22747 9.4621C9.70415 9.00298 10.0148 8.43402 10.125 7.81812L10.19 7.45521L8.21532 7.42885L6.24064 7.40249V6.49378V5.58507L9.06281 5.59316C10.615 5.59761 11.9118 5.60145 11.9445 5.60169C11.9773 5.60201 12.0512 5.83675 12.1088 6.12349C12.3256 7.20292 11.9278 8.83788 11.1644 10.005C10.5356 10.9663 9.86257 11.4851 8.43025 12.1127C7.83619 12.373 6.0989 12.4762 5.07284 12.3122Z" fill="#4185F4"/>
<path d="M25.9768 10.5501C26.4296 10.4367 27.0372 9.86631 27.2598 9.34552C27.3491 9.13687 27.4925 8.73528 27.4714 8.33403C27.4411 7.7611 27.3194 7.35385 27.1993 7.20849C26.6924 6.59443 26.4269 6.36931 26.0549 6.23808C25.2219 5.94417 24.4467 6.10495 23.8199 6.70162C22.5943 7.86824 23.0645 10.0341 24.6606 10.5746C25.118 10.7295 25.272 10.7267 25.9768 10.5501ZM24.2978 12.3143C23.2644 12.0962 22.185 11.2743 21.6954 10.3328C20.8797 8.76395 21.0869 6.94473 22.2249 5.68515C23.8484 3.88811 26.7104 3.88892 28.3642 5.68688C29.7871 7.23373 29.6396 10.0417 28.0646 11.3899C27.3139 12.0325 26.5831 12.322 25.5988 12.3664C25.1214 12.388 24.536 12.3645 24.2978 12.3143Z" fill="#FABC05"/>
<path d="M38.6957 6.28343V0.340088L39.6445 0.367943L40.5933 0.395793V6.28343V12.1711L39.6445 12.1989L38.6957 12.2268V6.28343Z" fill="#34A853"/>
</svg> </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-sliderpopup-container">
      <div class="sliderpopup-content">
        <div class="width-20-flex">
          <div>
            <img src="/wp-content/themes/lehladdak/review/images/backarrow.png" alt="" class="backarrow" />
          </div>
          <div>
            <div class="first-letter-name">
              <p class="sliderpopup-letter-name"></p>
            </div>
          </div>
          <div class="sliderpopup-reviewer">
            <p id="reviewer-name" class="client-name"></p>
          </div>
        </div>
        <div class="slider-popup-flex">
          <div class="width-20">
            <div class="sliderpopup-thumbnails">
              <div class="sliderpopup-thumbnail-container"></div>
            </div>
          </div>
          <div class="width-80">
            <div class="width-80-sticky">
              <div class="width-80-cross">
                <img src="/wp-content/themes/lehladdak/review/images/close.png" class="slider-close-sliderpopup" alt="" />
              </div>
              <div class="sliderpopup-full-width-image">
                <img src="" alt="Full Width Image" class="slider-popup-full-img" />
              </div>
              <div class="popup-arrow-btns">
                <button class="slider-arrow-btn left-arrow"><img src="/wp-content/themes/lehladdak/review/images/chevron-left.png" width="" /></button>
                <button class="slider-arrow-btn right-arrow"><img src="/wp-content/themes/lehladdak/review/images/chevron-right.png" width="" /></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Add jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
    let averageRating = 0;
    let totalRating = 0;
    let ratingCount = 0;

    // fetching data from Api
    async function fetchProducts() {
      const response = await fetch("https://www.esikkimtourism.in/wp-json/formidable/v1/entries?form_id=2");
      const data = await response.json();

      // average rating and rating count
      for (let i of data) {
        totalRating += Number(i.rating);
        ratingCount++;
      }
      let av = totalRating / ratingCount;
      averageRating = av.toFixed(1);

      let averageRatingElem = document.querySelectorAll('.averageRating')[0];
      let ratingCountElem = document.querySelectorAll('.ratingCount')[0];
      let averageRatingElem2 = document.querySelectorAll('.averageRating')[1];
      let ratingCountElem2 = document.querySelectorAll('.ratingCount')[1];
      averageRatingElem.innerHTML = averageRating;
      ratingCountElem.innerHTML = ratingCount;
      averageRatingElem2.innerHTML = averageRating;
      ratingCountElem2.innerHTML = ratingCount;
      let averageRatingStarsElem = document.querySelector('.averageRatingStars');
      averageRatingStarsElem.innerHTML = displayRating(averageRating)

      // Return the fetched data
      return data;
    }

    // star rating through average rating
    function displayRating(averageRating) {
      let htmlContent = '';
      if (averageRating !== false && averageRating !== '') {
        // Start with an opening <p> tag if needed
        htmlContent += '<p>';

        // Adding full stars
        for (let i = 0; i < Math.floor(averageRating); i++) {
          htmlContent += '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 18 16" fill="none">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#FFB552"/>\
</svg>';
        }

        // Adding half star
        if (averageRating - Math.floor(averageRating) >= 0.5) {
          htmlContent += '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 16" fill="none">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#DADCE0"/>\
<mask id="mask0_1192_3" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="16">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#DADCE0"/>\
</mask>\
<g mask="url(#mask0_1192_3)">\
<path d="M9 17.0667V-2H2.65385L-2 6.31111L-0.307692 20L9 17.0667Z" fill="#FFB552"/>\
</g>\
</svg>';
        }

        // Adding empty stars
        for (let i = Math.ceil(averageRating); i < 5; i++) { // Reinitialize `i` here
          htmlContent += '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 16" fill="none">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#DADCE0"/>\
</svg>';
        }

        // Close the <p> tag
        htmlContent += '</p>';
      } else {
        htmlContent = '<p>Rating: Not provided</p>';
      }
      return htmlContent;
    }


    // sorting function
    function sortData(data, isAscending = true) {
      // Create a new array to avoid mutating the original array
      const sortedData = [...data];
      return sortedData.sort((a, b) => {
        const ratingA = parseInt(a.rating || "0", 10);
        const ratingB = parseInt(b.rating || "0", 10);
        return isAscending ? ratingA - ratingB : ratingB - ratingA;
      });
    }

    // sort array to closest date
    function sortByDateClosestToNow(data) {
      const now = new Date();
      return [...data].sort((a, b) => {
        const dateA = new Date(a.entrydate);
        const dateB = new Date(b.entrydate);

        // Compare the absolute difference in time from the current date
        const differenceA = Math.abs(now - dateA);
        const differenceB = Math.abs(now - dateB);
        return differenceA - differenceB;
      });
    }

    // apply date logics for today , yesterday or within a week
    function formatDate(entryDate) {
      const now = new Date();
      const reviewDate = new Date(entryDate);
      const oneDay = 24 * 60 * 60 * 1000; // milliseconds in a day
      const oneMonth = 30 * oneDay; // approximate milliseconds in a month
      const diffTime = now - reviewDate;

      // Formatting dates
      const day = reviewDate.getDate();
      const month = reviewDate.toLocaleString('default', {
        month: 'short'
      });
      const year = reviewDate.getFullYear();

      if (diffTime < oneDay) {
        return 'Today';
      } else if (diffTime < 7 * oneDay) {
        const daysAgo = Math.round(diffTime / oneDay);
        return `${daysAgo} days ago`;
      } else if (diffTime < oneMonth) {
        return 'Within a month';
      } else if (diffTime < 6 * oneMonth) {
        const monthsAgo = Math.round(diffTime / oneMonth);
        return `${monthsAgo} months ago`;
      } else {
        return `${day} ${month} ${year}`;
      }
    }

    // function to count review stars in review
    function generateStarRating(rating) {
      let starsHtml = '';
      for (let i = 0; i < 5; i++) {
        if (i < Math.floor(rating)) {
          starsHtml += '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 16" fill="none">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#FFB552"/>\
</svg>';
        } else if (i === Math.floor(rating) && rating % 1 >= 0.5) {
          starsHtml += '<i class="fa fa-star-half-alt fa-lg yellow-star"></i>';
        } else {
          starsHtml += '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 16" fill="none">\
<path d="M8.57143 12.8445L3.25549 16L4.6772 10.0733L0 6.0885L6.16071 5.56258L8.57143 0L10.9821 5.56258L17.1429 6.0885L12.4863 10.0733L13.8874 16L8.57143 12.8445Z" fill="#DADCE0"/>\
</svg>';
        }
      }
      return starsHtml;
    }

    // function to write review wrapper html
    function str(data) {
      let codeLines = '';
      for (let i of data) {
        if (i.name) {
          let starRatingHtml = generateStarRating(i.rating);
          let review = `<div class="client-review-box-main">
                              <div class="client-review-box">
                                <div>
                                  <div class="first-letter-name">
                                    <p>
                                        ${i.userimage ? `<img src="${i.userimage}" alt="User Image">` : `<span class='nameLetter'>${i.name[0]}</span>`}
                                    </p>
                                  </div>
                                </div>
                                <div>
                                  <p class="client-name pb-10">${i.name}</p>
                                  <div class="pb-15 flex-align-center">
                                     ${starRatingHtml}
                                     <p class="star-today-txt">${formatDate(i.entrydate)}</p>
                                  </div>
                                </div>
                              </div>
                              <div class="less-more-box">
                                <div class="review-more-less-para pb-15">${i.paragraph}</div>
                                <div class="client-review-img-slider slick-slider pb-15">
                                       ${i.reviewimage.map(imageUrl => `<div class='slide'><div class="client-review-img"><img class="img-fluid" src="${imageUrl}" alt=""></div></div>`).join('')}
                                </div>
                              </div>
                            </div>`;
          codeLines += review;
        }
      }
      return codeLines;
    }

    // read more-less functionality
    function readMoreLess() {
      var contentList = document.querySelectorAll(".review-more-less-para");
      contentList.forEach(function(content) {
        var btnText = document.createElement("span");
        btnText.classList.add("toggleButton");
        btnText.innerText = "More";
        if (content.textContent.length > 300) {
          var first300 = content.textContent.substring(0, 300);
          var remaining = content.textContent.substring(300);
          content.innerHTML = first300 + '<span class="dots"></span><span class="moreText" style="display:none;">' + remaining + "</span> ";
          content.appendChild(btnText);
        }
        btnText.addEventListener("click", function() {
          toggleText(this);
        });
      });
    }

    function toggleText(button) {
      var dots = button.previousElementSibling.previousElementSibling;
      var moreText = button.previousElementSibling;
      var allButtons = document.querySelectorAll(".toggleButton");
      allButtons.forEach(function(btn) {
        var btnDots = btn.previousElementSibling.previousElementSibling;
        var btnMoreText = btn.previousElementSibling;

        if (btn !== button && btnDots.style.display === "none") {
          btnDots.style.display = "inline";
          btnMoreText.style.display = "none";
          btn.innerHTML = "More";
        }
      });
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        moreText.style.display = "none";
        button.innerHTML = "More";
      } else {
        dots.style.display = "none";
        moreText.style.display = "inline";
        button.innerHTML = "Less";
      }
    }

    // slick slider in each review images
    function sliderFunction() {
      var slider = $(".client-review-img-slider");
      slider.slick({
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        prevArrow: '<button type="button" class="slick-prev">Prev</button>', // Custom previous button
        nextArrow: '<button type="button" class="slick-next">Next</button>', // Custom next button
        responsive: [{
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
          },
        }],
      });
    }

    // adding class to parent wrapper when click on an review image
    function addClassToAncestor(element, className, ancestorClassName) {
      var ancestor = element.closest("." + ancestorClassName);
      if (ancestor) {
        ancestor.classList.add(className);
      }
    }

    // review form popup open
    function openPopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "flex";
      document.body.classList.add("popup-open"); // Add this class to body

      // ---------------
      let AddBtn = document.querySelector('.frm_dropzone.frm_multi_upload .dz-message');
      let c = `<svg viewBox="0 0 18 18" class="frmsvg frm-svg-icon">
	<path viewBox="0 0 18 18" fill-rule="evenodd" clip-rule="evenodd" d="M8.2 4v8a.8.8 0 001.5 0V4l2.1 2.2A.7.7 0 1013 5L9.5 1.7a.7.7 0 00-1.1 0L5.1 5.2a.8.8 0 001 1l2.1-2zm7.6 4.3c.4 0 .7.3.7.7v6.8c0 .4-.3.7-.8.7H2.3a.8.8 0 01-.8-.8V9A.8.8 0 013 9v6h12V9c0-.4.3-.8.8-.8z"></path>
</svg><span class="frm_upload_text"><button type="button">Upload photos</button></span>`
      let uploadBtnTxt = document.querySelector('.frm_dropzone.frm_multi_upload .frm_upload_text button');
      uploadBtnTxt.innerText = "Upload photos";
      let uploadBtnTxt2 = document.querySelector('.frm_dropzone.frm_single_upload .frm_upload_text button');
      uploadBtnTxt2.innerText = "Upload photos";
      let multiImageBox = document.querySelector('.multiImageSelector');
      let bg = document.querySelector('.multiImageSelector .frm_dropzone.frm_multi_upload');

      let box = document.querySelector('#frm_field_24_container');
      box.addEventListener('click', (event) => {
        event.stopPropagation()
        let uploadCheck = document.querySelector('input[multiple="multiple"]');
        uploadCheck.addEventListener('change', (event) => {
          let singleImage = document.querySelector('.frm_dropzone.frm_multi_upload .dz-preview .dz-column a');
          if (uploadCheck.files.length > 0) {
            AddBtn.classList.add('btnChanges');
            AddBtn.innerHTML = "Add more photos";
            bg.style.backgroundImage = 'none';
          } else {
            AddBtn.classList.remove('btnChanges');
            bg.style.backgroundImage = 'url(https://www.esikkimtourism.in/wp-content/uploads/2023/11/Frame-1.png)';
            AddBtn.innerHTML = c;
          }
          if (singleImage) {
            singleImage.addEventListener('click', () => {
              AddBtn.classList.remove('btnChanges');
              bg.style.backgroundImage = 'url(https://www.esikkimtourism.in/wp-content/uploads/2023/11/Frame-1.png)';
              AddBtn.innerHTML = c;
              uploadCheck.value = '';
            })
          }
        })
      })

    }

    function pagination() {
    const reviewsPerPage = 4;
    let currentPage = 1;

    function updateReviewsVisibility() {
        const reviews = document.querySelectorAll("#reviewsWrapper .client-review-box-main");
        const totalPages = Math.ceil(reviews.length / reviewsPerPage);

        reviews.forEach((review, index) => {
            review.style.display = index >= (currentPage - 1) * reviewsPerPage && index < currentPage * reviewsPerPage ? '' : 'none';
        });

        updatePaginationControls(totalPages);
        document.getElementById("prevPage").disabled = currentPage === 1;
        document.getElementById("nextPage").disabled = currentPage === totalPages;
    }

    function updatePaginationControls(totalPages) {
        const pagesContainer = document.getElementById("pagesContainer");
        pagesContainer.innerHTML = ''; // Clear existing page numbers

        for (let i = 1; i <= totalPages; i++) {
            const pageNumberElem = document.createElement("span");
            pageNumberElem.innerText = i;
            pageNumberElem.style.border = i === currentPage ? 'solid 1px #0bcee0' : 'solid 1px rgba(36, 39, 44, 0.1)';
            pageNumberElem.style.color = i === currentPage ? '#0bcee0' : '#24272c';
            pageNumberElem.style.cursor = 'pointer';
            pageNumberElem.style.margin = '0 5px';
            pageNumberElem.addEventListener('click', () => {
                currentPage = i;
                updateReviewsVisibility();
            });

            pagesContainer.appendChild(pageNumberElem);
        }
    }

    document.getElementById("prevPage").addEventListener("click", function() {
        if (currentPage > 1) {
            currentPage--;
            updateReviewsVisibility();
        }
    });

    document.getElementById("nextPage").addEventListener("click", function() {
        const totalReviews = document.querySelectorAll("#reviewsWrapper .client-review-box-main").length;
        const totalPages = Math.ceil(totalReviews / reviewsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            updateReviewsVisibility();
        }
    });

    updateReviewsVisibility();
}


    // review form popup close
    function closePopup() {
      var popup = document.getElementById("popup");
      popup.style.display = "none";
      document.body.classList.remove("popup-open"); // Remove the class when closing popup
    }

    // adding bgColor to short button
    function changeSortButtonBg() {
      const sortOptions = document.querySelectorAll(".sort-option");
      sortOptions.forEach((option) => {
        option.addEventListener("click", function() {
          // Remove "active" class from all options
          sortOptions.forEach((opt) => opt.classList.remove("active-short-option"));

          // Add "active" class to the clicked option
          this.classList.add("active-short-option");
        });
      });
    }



    // show popup on click
    function xyz() {

      var reviewerName = document.getElementById("reviewer-name");
      var sliderImages = document.querySelectorAll(".client-review-img-slider .img-fluid");
      let currentSrc = '';
      var sliderpopup = document.querySelector(".slider-sliderpopup-container");
      var fullWidthImage = document.querySelector(".sliderpopup-full-width-image img");

      sliderImages.forEach((image) => {

        image.addEventListener("click", function() {
          currentSrc = image.src;
          var sliderWrapper = document.querySelectorAll(".client-review-box-main");
          sliderWrapper.forEach((element) => {
            element.classList.remove("ancestor-slide");
          });
          addClassToAncestor(image, "ancestor-slide", "client-review-box-main");
          var firstLetter = document.querySelector(".ancestor-slide .first-letter-name p").innerHTML;
          var sliderpopupLetter = document.querySelector(".sliderpopup-letter-name");
          var clientName = document.querySelector(".ancestor-slide .client-name");

          if (sliderpopupLetter && firstLetter != "") {
            sliderpopupLetter.innerHTML = firstLetter;
          }

          if (clientName && reviewerName) {
            reviewerName.innerText = clientName.innerText;
          }

          function showPopup(currentSrc) {
            sliderpopup.style.display = "flex";
            document.body.style.overflow = "hidden";
            var thumbnailContainer = document.querySelector(".sliderpopup-thumbnail-container");
            thumbnailContainer.innerHTML = "";
            let currentImageIndex = 0;
            var thumbnailContainerImages = document.querySelectorAll(".ancestor-slide .img-fluid");

            thumbnailContainerImages.forEach(function(element) {
              var thumbnail = document.createElement("img");
              thumbnail.src = element.src;
              thumbnail.classList.add("sliderpopup-thumbnail");
              thumbnailContainer.appendChild(thumbnail);
              if (element.src == currentSrc) {
                // Set active class for current thumbnail
                thumbnail.classList.add("active");
                // Set default full-width image
                fullWidthImage.src = currentSrc;
              }
              thumbnail.addEventListener("click", function() {
                document.querySelectorAll(".sliderpopup-thumbnail").forEach(function(element) {
                  if (element == thumbnail) {
                    element.classList.add("active");
                    fullWidthImage.src = element.src;
                  } else {
                    element.classList.remove("active");
                  }
                  // current index for slider
                  let Rarr = document.querySelectorAll(".sliderpopup-thumbnail-container img");
                  let imageArray = Array.from(Rarr);
                  let imageElement = document.querySelector(".sliderpopup-full-width-image img");
                  imageArray.forEach((element, index) => {
                    if (element.src == imageElement.src) {
                      currentImageIndex = index;
                    }
                  })
                });
              });
            });

            let Rarr = document.querySelectorAll(".sliderpopup-thumbnail-container img");
            let imageArray = Array.from(Rarr);
            let imageElement = document.querySelector(".sliderpopup-full-width-image img");
            imageArray.forEach((element, index) => {
              if (element.src == imageElement.src) {
                currentImageIndex = index;
              }
            })

            function showImage(index) {
              let Rarr = document.querySelectorAll(".sliderpopup-thumbnail-container img");
              let imageArray = Array.from(Rarr)
              let imageElement = document.querySelector(".sliderpopup-full-width-image img");
              imageElement.src = imageArray[currentImageIndex].src;
              imageArray.forEach((element) => {
                element.classList.remove("active");
              })
              imageArray[currentImageIndex].classList.add("active");
            }

            document.querySelector('.slider-arrow-btn.left-arrow').addEventListener('click', function() {
              let Rarr = document.querySelectorAll(".sliderpopup-thumbnail-container img");
              let images = Array.from(Rarr)
              currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
              showImage(currentImageIndex);
            });

            document.querySelector('.slider-arrow-btn.right-arrow').addEventListener('click', function() {
              let Rarr = document.querySelectorAll(".sliderpopup-thumbnail-container img");
              let images = Array.from(Rarr)
              currentImageIndex = (currentImageIndex + 1) % images.length;
              showImage(currentImageIndex);
            });
          }
          showPopup(currentSrc)
        });
      });

      var closeButton = document.querySelector(".slider-close-sliderpopup");
      closeButton.addEventListener("click", function() {
        var thumbnailContainer = document.querySelector(".sliderpopup-thumbnail-container");
        thumbnailContainer.innerHTML = "";
        sliderpopup.style.display = "none";
        document.body.style.overflow = "auto"; // Reset body overflow to auto
      });

      var faArrowLeft = document.querySelector(".backarrow");
      faArrowLeft.addEventListener("click", function() {
        var thumbnailContainer = document.querySelector(".sliderpopup-thumbnail-container");
        thumbnailContainer.innerHTML = "";
        sliderpopup.style.display = "none";
        document.body.style.overflow = "auto"; // Reset body overflow to auto
      });
      pagination()
    }

    // function to show reviews 
    async function c1() {
      const defaultData = await fetchProducts();
      let reviewHtml = document.getElementById('reviewsWrapper');
      let latestData = sortByDateClosestToNow(defaultData)
      console.log(latestData);
      reviewHtml.innerHTML = str(latestData);

      sliderFunction();
      changeSortButtonBg();
      readMoreLess();

      function processData(boolean) {
        let sortArr = sortData(defaultData, boolean);
        reviewHtml.innerHTML = str(sortArr);
        readMoreLess();
        sliderFunction();

      }

      // button 1
      let b1 = document.getElementById('Newest');
      b1.addEventListener('click', () => {
        let latestData = sortByDateClosestToNow(defaultData)
        reviewHtml.innerHTML = str(latestData);
        readMoreLess();
        sliderFunction();
        xyz()
      })

      // button 2
      let b2 = document.getElementById('highestRating');
      b2.addEventListener('click', () => {
        processData(false);
        xyz()
      })

      // button 3
      let b3 = document.getElementById('lowestRating');
      b3.addEventListener('click', () => {
        processData(true);
        xyz()
      })
      xyz()


      $(".time-span").click(function() {
        $(".time-para").toggle(400);
        $(this).find(".fa-caret-down").toggleClass("fa-caret-down fa-caret-up");
      });

      // closing c1 function
    }
    c1();
  </script>



</body>

</html>

<?php
get_footer();
?>