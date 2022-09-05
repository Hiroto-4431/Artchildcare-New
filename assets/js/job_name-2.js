// job.php → form.php 応募案件名表示
const job_names = document.querySelectorAll('.job__content--title');
const job_name_sends = document.querySelectorAll('.job_name_hidden');


for (let i = 0; i < job_names.length; i++) {
  const job_name_texts = job_names[i].textContent;
  job_name_sends[i].setAttribute('value', job_name_texts);
}

