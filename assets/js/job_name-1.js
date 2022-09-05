// detail.php → form.php 応募案件名表示

const job_names = document.querySelector('.detail__content--job--title');
const job_name_text_all = job_names.textContent;
const job_name_text = job_name_text_all.trim();

const job_name_send = document.querySelector('#job_name_send');
job_name_send.setAttribute('value', job_name_text);

// 表示先
const form_job_name = document.querySelector('.form__content--cell--job-name');