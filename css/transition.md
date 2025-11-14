حتما لازمه از یه سودو کلاس استفاده کنیم تا بتونیم ترنزیشن داشته باشیم

```css
.myClass {
  width: 200px;

  /* Adding transition */
  transition-property: width; /* مسخص میکنه کدوم ویژگی قراره روش اعمال بشه */
  transition-duration: 1000ms; /* چقد طول بکشه تا ترنزیشن تموم بشه.. برحسب ms یا s*/
  transition-timing-function: ease; /* مشخص میکنه رفتار چطوری باشه */
  /* ease --> اروم شروع میشه یهو سرعت میگیره و دوباره اروم میشه و تموم میشه*/
  /* ease-in --> آروم شروع میشه و سریع تموم میشه */
  /* ease-in-out --> */
  /* ease-out --> سریع شروع میشه و آروم تموم میشه */
  /* linear --> سرعتش ثابت میمونه */
  /* steps --> */
  /*  cubic-bezier --> */
  transition-delay: 2000ms; /* مدت زمانی که طول میکشه تا تاثیر ترنزیشن شروع بشه */

  /* Or */
  transition: width 2s ease 0s;

  /* ممکنه بخوایم چندتا پراپری تغییر کننن مثلا هم اندازش و هم رنگش... با کاما از هم جداشون میکنیم: */
  transition: width 5s ease 0s, background-color 2s linear 0s;

  /* یا هم اگر میخواستی ترنزیشن روی  تمام پراپرتی ها اعمال بشه بجای اسم پراپرتی مینویسی all */
  transition: all 5s ease 0s;
}

.myClass:hover {
  width: 500px;

  background-color: red;
}


.test {
  transition: transform 1s ease;
}

.test:hover {
  transform: rotate(135deg);
}
```
