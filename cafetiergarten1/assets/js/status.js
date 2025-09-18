function checkIfOpen() {
  const now = new Date();
  const day = now.getDay(); // 0 = So, 6 = Sa
  const hour = now.getHours();

  // Di (2) bis So (0)
  const isOpenDay = (day >= 2 && day <= 6) || day === 0;

  let message = 'Geschlossen. Komm Di, Mi, So zwischen 10-18 Uhr und Fr, Sa zwischen 10-22 Uhr wieder.';

  if (isOpenDay && hour >= 11 && hour < 18) {
    message = "Heute geöffnet bis 18 Uhr.";
  }

  const el = document.getElementById("statusMessage");
  if (el) el.innerHTML = message;
}

document.addEventListener("DOMContentLoaded", checkIfOpen);
