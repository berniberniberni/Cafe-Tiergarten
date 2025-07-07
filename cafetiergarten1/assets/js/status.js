function checkIfOpen() {
  const now = new Date();
  const day = now.getDay(); // 0 = So, 6 = Sa
  const hour = now.getHours();

  // Mi (3) bis So (0)
  const isOpenDay = (day >= 3 && day <= 6) || day === 0;

  let message = 'Leider haben wir geschlossen. Bitte komm Mi - So zwischen 10-18 Uhr wieder.';

  if (isOpenDay && hour >= 11 && hour < 18) {
    message = "Heute geöffnet bis 18 Uhr.";
  }

  const el = document.getElementById("statusMessage");
  if (el) el.innerHTML = message;
}

document.addEventListener("DOMContentLoaded", checkIfOpen);
