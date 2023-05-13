const form = document.querySelector("form");

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  const formData = new FormData(form);
  const response = await fetch("filter.php", {
    method: "POST",
    body: formData,
  });

  const data = await response.text();

  const results = document.querySelector("#results");
  results.innerHTML = data;
});
function filterJobs() {
  // ambil nilai input filter
  var location = document.getElementById("filter-location").value;
  var category = document.getElementById("filter-category").value;

  // buat objek XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // atur tindakan yang akan dilakukan setelah data berhasil diterima
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // tampilkan data lowongan kerja yang telah difilter
      document.getElementById("job-list").innerHTML = xhr.responseText;
    }
  };

  // kirim permintaan ke server
  xhr.open("POST", "filter_jobs.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("location=" + location + "&category=" + category);
}
