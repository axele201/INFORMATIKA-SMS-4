// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); };

// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });

// Page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// Add event listener to all navigation links
navigationLinks.forEach((link, index) => {
  link.addEventListener("click", function () {
    pages.forEach((page, i) => {
      if (this.innerHTML.toLowerCase() === page.dataset.page) {
        page.classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        page.classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    });
  });
});

// Theme switching (Dark Mode / Light Mode)
document.addEventListener('DOMContentLoaded', () => {
  const checkbox = document.getElementById('checkbox');
  const body = document.body;
  const sidebar = document.querySelector('.sidebar');

  // Check and apply previously saved theme preference (dark or light mode)
  if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    sidebar.classList.add('dark-mode');
    checkbox.checked = true;
  } else {
    body.classList.add('light-mode');
    sidebar.classList.add('light-mode');
    checkbox.checked = false;
  }

  // Add event listener for theme switch (dark/light)
  checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
      body.classList.remove('light-mode');
      body.classList.add('dark-mode');
      sidebar.classList.remove('light-mode');
      sidebar.classList.add('dark-mode');
      localStorage.setItem('theme', 'dark');
    } else {
      body.classList.remove('dark-mode');
      body.classList.add('light-mode');
      sidebar.classList.remove('dark-mode');
      sidebar.classList.add('light-mode');
      localStorage.setItem('theme', 'light');
    }
  });

  // Update the time and countdown once DOM content is fully loaded
  updateTime(); // Initial time update
  updateCountdown(); // Initial countdown update

  // Ensure updateTime is called every second
  setInterval(updateTime, 1000); // Update time every second
});

// Update the current time in WIB format
function updateTime() {
  var currentDate = new Date();
  var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
  var formattedDate = currentDate.getDate() + ' ' + monthNames[currentDate.getMonth()] + ' ' + currentDate.getFullYear();
  var hours = currentDate.getHours().toString().padStart(2, '0');
  var minutes = currentDate.getMinutes().toString().padStart(2, '0');
  var seconds = currentDate.getSeconds().toString().padStart(2, '0');
  var formattedTime = formattedDate + ', ' + hours + ':' + minutes + ':' + seconds + ' WIB';

  // Check if the element exists before trying to set the text
  const currentTimeElement = document.getElementById('current-time');
  if (currentTimeElement) {
    currentTimeElement.innerText = formattedTime;
  }
}

// Update the countdown for the next class
function updateCountdown() {
  var currentTime = new Date();
  var schedule = [
    { name: "PEMOGRAMAN LOGIC & SISTEMATIC", time: "17:00", day: "Senin" },
    { name: "MIKROPROSESOR", time: "19:00", day: "Senin" },
    { name: "BAHASA ASEMBLY", time: "17:00", day: "Selasa" },
    { name: "PENGOLAHAN CITRA DIGITAL", time: "19:00", day: "Selasa" },
    { name: "KRIPTOGRAFI", time: "17:00", day: "Rabu" },
    { name: "TEORI GRAFIKA", time: "19:00", day: "Rabu" },
    { name: "MULTIMEDIA", time: "19:00", day: "Kamis" }
  ];

  const daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
  var currentDayIndex = currentTime.getDay();

  var nextClass = null;
  var nextClassTime = null;

  // Cari kelas berikutnya
  for (var i = 0; i < schedule.length; i++) {
    var classTimeParts = schedule[i].time.split(":");
    var classDate = new Date();

    // Tentukan hari kelas
    var dayDifference = (daysOfWeek.indexOf(schedule[i].day) - currentDayIndex + 7) % 7;
    classDate.setDate(currentTime.getDate() + dayDifference);
    classDate.setHours(classTimeParts[0], classTimeParts[1], 0, 0);

    if (classDate > currentTime) {
      nextClass = schedule[i];
      nextClassTime = classDate;
      break;
    }
  }

  // Jika tidak ada kelas hari ini, pilih kelas pertama hari berikutnya
  if (!nextClass) {
    nextClass = schedule[0];
    var nextDay = new Date();
    nextDay.setDate(currentTime.getDate() + 1);
    var classTimeParts = nextClass.time.split(":");
    nextDay.setHours(classTimeParts[0], classTimeParts[1], 0, 0);
    nextClassTime = nextDay;
  }

  var remainingTime = nextClassTime - currentTime;
  var hours = Math.floor((remainingTime / (1000 * 60 * 60)) % 24);
  var minutes = Math.floor((remainingTime / (1000 * 60)) % 60);
  var seconds = Math.floor((remainingTime / 1000) % 60);

  // Check if elements exist before trying to set their text
  const nextClassElement = document.getElementById("next-class");
  const countdownElement = document.getElementById("countdown");

  if (nextClassElement && countdownElement) {
    nextClassElement.innerText = nextClass.name + " (" + nextClass.day + ")";
    countdownElement.innerText = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
  }

  setTimeout(updateCountdown, 1000); // Update countdown every second
}
