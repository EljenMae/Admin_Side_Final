<?php
    session_start();
    $page_title = 'SpyXFamily | Dashboard';
    require_once '../includes/header.php';
    require_once '../includes/sidebar.php';
    require_once '../includes/topnav.php';
?>
<div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Reserve</div>
            <div class="number">50,000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <div class = "reserve">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAMRJREFUSEvtl9ENwjAMRF83oZMAk1AmgVFgAzoBjMAIjIJOalHrj0aRoVZE8mcpzovti3ptCFpNEBcL3gCH4TJXQPHWebkn0NszLHgH3IdNe0DxyQlW+gU4Ts9ZCyxmC7xG+JpgdfBRHFiC+7QrMXvpYypMV8Wz5AT4bIRZJtjzslwVh4GruJZa/1VVh824gnM6UOY7zqnQ7q0VzzryK88lyP+1OsTs6avWLdlbGfhxg7ywYs3ds2TobylD7wFk5Yb9O70BHKhaH8ebF+gAAAAASUVORK5CYII="/>
            </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Serve</div>
            <div class="number">20,500</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <div class="reserveTwo">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAbpJREFUSEvVlv01xUAQxe+rABWgAkqgAjpABagAFaADOqACVIAK0AEdOL+cmZx9yWSTfV6E+SfnbGbnztz52pkmktlEuPp3wBuS9oytJ0kvpcyVRLwt6V3SiaSzBtC5pGtJODTIiT7gHQPhWyKPki4k8Q0lB0yED5JWg5uvkq7sHAa2Ap1PSbtdDOSAbyQdmMF78x4qD41SDCM4RgrQ5ws7nv9b02/5lQPG8IokoiP6nADujqBHnmGBs83Gv8pOBIwRKHYwckXxlAj6XoA4AeWpYyHwXULVh1UxZyWybzWwnqSKs1qiiJ1i8jqnXIJsuh4ENte6gKH4OKGVS4N6MuMQ6XLn6QLSVlGeRkxbXC4QVcmVI6v+Xwc+9f5PI6b/qOYxhequptmfAMYRr+gxov5Kx2+znag8KnsMYXtRwJU0gZnFb2Og2uhklofAHKbLYVk+tJZF15LwIb8M4HDJdAEzxSj7aM+WOAMobTq3IKIcp0YBp9h8J5cAogu9FFMLtA/YgRYZpfWE6vK2783FvUUmWj2hfgLMhnku5JlXR9060d0hEXOP1db3/HH7/v7K+joUuDDgfvXJgL8B2K9PH+wiVq8AAAAASUVORK5CYII="/>
            </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Canceled</div>
            <div class="number">12,876</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <div class="reserveThree">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Employees</div>
            <div class="number">200</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up From Tuesday</span>
            </div>
          </div>
          <div class="reserveFour">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
              </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Reserve</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
              <li><a href="#">02 Jan 2021</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Time</li>
              <li><a href="#">11:00 PM</a></li>
              <li><a href="#">09:30 AM</a></li>
              <li><a href="#">11:00 PM</a></li>
              <li><a href="#">08:00 AM</a></li>
              <li><a href="#">08:00 AM</a></li>
              <li><a href="#">11:00 PM</a></li>
              <li><a href="#">09:30 AM</a></li>
               <li><a href="#">08:00 AM</a></li>
               <li><a href="#">09:30 AM</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Alex Doe</a></li>
            <li><a href="#">David Mart</a></li>
            <li><a href="#">Roe Parter</a></li>
            <li><a href="#">Diana Penty</a></li>
            <li><a href="#">Martin Paw</a></li>
            <li><a href="#">Doe Alex</a></li>
            <li><a href="#">Aiana Lexa</a></li>
            <li><a href="#">Rexel Mags</a></li>
             <li><a href="#">Tiana Loths</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Waiter</li>
            <li><a href="#">Anya</a></li>
            <li><a href="#">Yor</a></li>
            <li><a href="#">Loid</a></li>
            <li><a href="#">Yor</a></li>
            <li><a href="#">Yor</a></li>
            <li><a href="#">Loid</a></li>
            <li><a href="#">Anya</a></li>
             <li><a href="#">Loid</a></li>
            <li><a href="#">Anya</a></li>
          </ul>
          
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Reserve Waiter</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="allphotos/anya.png" alt="">
              <span class="Waiter">Anya</span>
            </a>
            <span class="people">20,000</span>
          </li>
          <li>
            <a href="#">
              <img src="allphotos/loid.webp" alt="">
              <span class="Waiter">Loid</span>
            </a>
            <span class="people">10,000</span>
          </li>
          <li>
            <a href="#">
              <img src="allphotos/yor.png" alt="">
              <span class="Waiter">Yor</span>
            </a>
            <span class="people">5,000</span>
          </li>
          </ul>
        </div>
      </div>
    </div>
</div>
</div>
