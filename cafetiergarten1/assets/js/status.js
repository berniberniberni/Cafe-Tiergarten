function checkIfOpen() {
  const now = new Date();
  const day = now.getDay(); // 0 = So, 6 = Sa
  const hour = now.getHours();

  // Di (2), Mi (3), Do (4), So (0)
  const weekdayOpen = (day === 2 || day === 3 || day === 4 || day === 0);
  // Fr (5), Sa (6)
  const weekendOpen = (day === 5 || day === 6);

  let message = 'Geschlossen. Komm morgen wieder.';

  if (weekdayOpen && hour >= 10 && hour < 18) {
    message = "Heute geöffnet bis 18 Uhr.";
  } else if (weekendOpen && hour >= 10 && hour < 22) {
    message = "Heute geöffnet bis 22 Uhr.";
  }

  const el = document.getElementById("statusMessage");
  if (el) el.innerHTML = message;
}

document.addEventListener("DOMContentLoaded", checkIfOpen);
