function checkIfOpen() {
  const now = new Date();
  const day = now.getDay(); // 0 = So, 6 = Sa
  const hour = now.getHours();

  // Di (2) bis So (0)
  const isOpenDay = (day >= 2 && day <= 6) || day === 0;

  let message = 'Geschlossen. Bitte komm Di - So zwischen 10-18 Uhr (Fr/Sa bis 22 Uhr) wieder.';

  if (isOpenDay) {
    if ((day === 5 || day === 6) && hour >= 10 && hour < 22) {
      // Friday (5) and Saturday (6) extended hours
      message = "Heute geöffnet bis 22 Uhr.";
    } else if (hour >= 10 && hour < 18) {
      // Other days (Tuesday to Sunday)
      message = "Heute geöffnet bis 18 Uhr.";
    }
  }

  const el = document.getElementById("statusMessage");
  if (el) el.innerHTML = message;
}

document.addEventListener("DOMContentLoaded", checkIfOpen);