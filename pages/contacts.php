<?php include '../components/north-include.php'; ?>

<!-- Contact -->
<div class="py-4 " id="navbarContact">
  <section class="container-lg text-white">
    <h1 class="m-4  text-center">
      just click and copy or write and send!
    </h1>
    <div class="row g-4">
      <!-- call and address -->
      <div class="col-md-6">
        <div class="row g-4 non-st-header">
          <div class="col-md-6">
            <div class="service-cards p-4">
              <svg class="text-alpha" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
              <h2 class="mt-5 ">Address</h2>
              <div class="service-cards">
                <div class="ms-3" id="selectable" onclick="selectText('selectable')" id="selectable" onclick="selectText('selectable')">
                  <div>A108 Adam Street,</div>
                  <div>New York, NY 535022</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-cards p-4">
              <svg class="text-alpha" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg>
              <h2 class="mt-5 ">Call Us</h2>
              <div class="service-cards">
                <div class="ms-3">
                  <div id="selectable1" onclick="selectText('selectable1')">
                    <i class="bi bi-telegram"></i> +1 8784 6553 11
                  </div>
                  <div id="selectable3" onclick="selectText('selectable3')">
                    <i class="bi bi-whatsapp"></i> +1 4512 22221 11
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-cards p-4">
              <svg class="text-alpha" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
              </svg>
              <h2 class="mt-5 ">Email Us</h2>
              <div class="service-cards">
                <div class="ms-3">
                  <div id="selectable2" onclick="selectText('selectable2')">
                    info@example.com
                  </div>
                  <div id="selectable4" onclick="selectText('selectable4')">
                    contact@example.com
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 non-st">
            <div class="service-cards p-4">
              <svg class="text-alpha" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
              </svg>
              <h2 class="mt-5 ">work Hours</h2>
              <div class="service-cards">
                <div class="ms-3">
                  <div>Monday - Friday</div>
                  <div>9:00AM - 05:00PM</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- comment -->
      <div class="col-md-6">
        <form class="service-cards p-4 text-white contact-us-comment">
          <div class="mb-3">
            <label for="contactFullanme" class="form-label  h4 text-white">Fullname</label>
            <input type="text" class="form-control service-cards mt-0" id="contactFullanme" placeholder="Ex: Steve Russel" />
          </div>
          <div class="mb-3">
            <label for="contactEmail" class="form-label  h4 text-white">Email address</label>
            <input type="email" class="form-control service-cards mt-0" id="contactEmail" placeholder="name@example.com" />
          </div>
          <div class="mb-3">
            <label for="conatctComment" class="form-label  h4 text-white">Your comment</label>
            <textarea class="form-control service-cards mt-0 text-area-comment" id="conatctComment" rows="8"></textarea>
          </div>
          <button class="btn btn-alpha" style="margin-bottom: 28px">
            Send
          </button>
        </form>
      </div>
    </div>
  </section>
</div>

<?php include '../components/south-include.php'; ?>