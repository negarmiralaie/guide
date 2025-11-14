

1. color
2. background-color
3. font-size
4. height
5. width
6. انواع رنگ دهی
6.1. با اسم رنگ --> مرورگها برخی رنگ ها رو با اسم میشناسن مثل: red - blue - green
6.2. با rgb --> نشاندهنده میزان هر رنگ red blue green --> نمایش با یک عدد از 0 تا 255
6.3. با rgba --> برای نمایش رنگ های شفاف --> چهارمین عدد بین 0 تا 1 میباشد برای نمایش میزان شفافیت
6.4. با کد hex ---> 
از 16 میاد.. برای هر قسمت از یک عدد استفاده میکنیم اما اعداد از 0 تا 15 که اعداد بعد از 0 بصورت حروف نمایش داده میشن
اینجا هم هر رنگ از 3 بخش تشکیل میشه که تو هر بخش دو رقم نوشته میشه
#RRGGBB
00: بدون رنگ
ff: بیشترین رنگ

* تو کامپیوتر رنگ های اصلی با یه عدد از 0 تا 255 نشون داده میشن ولی تو سیستم هگزادسیمال با دو رقم از 0 تا 15 نشون داده میشن

* fc : زیاد
* 250: زیاد

* 37: کم
* 30: کم

مثال: #02fc23
02: قرمز نزدیک به صفر
سبز زیاد: fc
آبی کم: 23

extension: color hightlight


6.5. با hsl -->
hue: درجه رنگ از 0 تا 360
staturation: اشباع - درصد رنگ
lightness: درصد روشنایی
hsl(0, 100%, 50%)
hue:0 --> قرمز
hue: 60 --> زرد
hue: 120 --> سبز
...
6.6. hsla
hsla(200, 100%, 50%, 0.3)



7. text-align:
اگه استارت بزنیم درصورتیکه دایرکشن آرتی ال باشه میاد اول خط
```html
  <p style="text-align: start">
    Hello
  </p>

  <p style="text-align: end">
    Hello
  </p>

  <p style="text-align: justify">
    Hello
  </p>
```

8. border
9. border-style
10. border-width
```html
  <p style="border-style: solid; border-width: 10px; border-color: red;">
    Hello
  </p>
```
11. border-color
12. margin
13. padding
```html
<p style="background-color: pink; margin: 20px; padding: 50px">
  Hello World
</p>
```

14. Display: flex;
وقتی 
flex-direction: row;
justify-content: start;
همه چیز میاد از اول خط نوشته میشه


justify-content: space-between;
justify-content: space-around;

align-items: start; <!-- محل قرارگیریشون در محور افقی مشخص میشه -- حتما باید ارتفاع بدی به المنت پرنت تا مشخص بشه -->


```html
  <div style="background-color: burlywood; display: flex; flex-direction: row; justify-content: start; gap: 10px;">
    <p>1 Lorem ipsum dolor sit .</p>
    <p>2 Lorem ipsum dolor sit .</p>
  </div>
```

* external css
<link rel="stylesheet" href="./main.css">

```css
p {
  color: red;
}
```

* We use classes to be able to address a specific element
کلاس های رز
```html
<div>
  <p class="redItem">red item</p>
  <p class="redItem">next item that should have a color...</p>
  <p >green item</p>
  <p>blue item</p>
  <p>green item</p>
  <p>green item</p>
  <p class="redItem">another red item</p>
</div>
```

```css
.redItem {
  color: purple;
}
```

* id


15. Transition
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

16. rem - em - % - px
17. positions
18. media query









19. Fonts
19.1 Adding from google fonts:
go to fonts.google.com
choose your desired font
go to SELECT
use the "link" and copy paste it in head of your html
use the css rule below the link and paste it in front of font-family

19.2 Using custom fonts
Download your desired font
Now go to your css:
Do not forget to link your css into your html head
```css
@font-face {
  font-family: 'MyCustoFontName';
  src: url(./font.ttf);
}

h1 {
  font-family: 'MyCustoFontName'; 
}
```

```html {
  <link rel="stylesheet" href="./main.css">
}


20. Inspect Element



20. images:
برای وقت هایی که انگار عکست کشیده شده یا جمع شده
```css
<!--  کاور میاد و یکاری میکنه عکس در بکگراند پر شد... کاور کنه بکگراند رو -->

object-fit: cover;
<!-- کانتین میاد و کل عکس رو حتما جا میده -->
object-fit: contain;

<!-- فقط سمت بالا چپ باشه داخل عکس ... ازونجا شروع بشه -->
object-position: top left;
```


21. background image
```css
/* وقتی عکس میذاری تو بکگراند اگه عکس کوچیک باشه  */
background-image: url('./);

/* وقتی عکس کوچیک بیاد نیاد عکس رو تکرار کنه */
background-repeat: no-repeat;
/* فقط در جهت وای تکرار میکنه */
background-repeat: repeat-y;

/* فقط در جهت ایکس تکرار میکنه */
background-repeat: repeat-x;

backgroud-size: cover;

/* برای افزایش اندازه عکس بکگراند */
background-size: 100%; 


  <div class="bgImage" style="background: url('./canva-4H2enmthDtU.jpg'); background-repeat: no-repeat; background-size: cover;">
    <p style="width: 500px; height: 4000px;">lksjw</p>
  </div>
```

23. pseudo classes:
https://www.youtube.com/watch?v=kpXKwDGtjGE


24. pseudo elements:
```css
button:hover {

}

button:active {
    
}
```

25. border-image:
```css

```


25. columns:
یه تعداد عکس با ارتفاع متفاوت رو میذاریم و کنار هم قرارشون میده
اولی میشه تعداد ستون ها و دومی میشه مینیم سایزی که میتونن بگیرن
اون عکس ها رو بذار داخل تگ ایمیج و بهشون width بده
به پرنتشون این رو بده:
```css
columns: 3 300px;

/* اینطوری میتونی فاصله بین المنت ها رو عوض کنی  */
column-gap: 1em;
```



26. margin: auto;
در قالب تمرین هدر بهشون margin auto و justify content s
pace between رو بده

خود المنت باید حتما width داشته باشه و بعد بهش مارجین اتو بدی تا اعمال بشه
به خود المنت و پرنتش بکگراند کالر بده تا مشخص بشه
ابنطوری فقط از سمت راست و چپ وسطچین میشه

اگه خواستیم از بالا و پایین هم وسطچین باشه باید به پرنت دیسپلی فلکس بدیم
```html
  <div style="background-color: yellowgreen;">
    <p style="background-color: red; width: 100px; margin: auto;">test text</p>
  </div>
```

```css
inset: 0;
margin: auto;
```

22. box-shadow
```css

```


#### How to create an Accordion:
```html
<details>
  <summary>Click to expand</summary>
  <p>lorem............</p>
</details>
```




23. variables:
```css
:root {
  --main-color: #fff;
}
```


1. Deployment
2. Tailwind
3. Demystifying css
4. Github
5. Portfolio
6. Seo Test
7. Sass
8. Md

#### Simple Websites:
1. https://www.cocokind.com/



* یوقتایی هرچقدر text-align: center; مینویسی اعمال نمیشه... چرا؟
1. یا display: block هست............
حتما باید display: inline; باشه تا 
اگه دیسپلی عنصر بلاک بود یا تبدیلش کن به اینلاین یا فلکس یا اگه مجبور بودی دیسپلی رو روی بلاک نگه داری از مارجین اوتو استفاده کن


2. اگه دیسپلی عنصر فلکس شده باشه دیگه تکست الاین روش اثر نداره..... چون وقتی فلکس باشه از راه های دیگه ای میشه سنتر کرد

3. اگه یه متن داری که داخل تگ پی هست و تگ پی داخل تگ دیو هست برای اینکه متن وسطچین بشه باید کلاس رو به تگ پرنت ینی دیو بدی






* یکسری از ویژگی ها قابل ارثبری هستند از پرنت به چایلد مثل:
color
font-size
font-family
cursor


ولی یکسری از ویژگی ها قابلیت ارثبری ندارن:
* backgroung
margin
padding
width
height
border
display
position


* ولی یوقتایی که میبینی حتی ویژگی هایی که قابلیت ارثبری دارند هم باز ارث برده نمیشن ممکنه به این دلایل باشه:
1. بچه خودش استایل مخصوص داره مثلا خودش یه رنگ داره برای خودش


می‌تونی هر خاصیتی رو مجبور کنی از پدرش ارث ببره:

span {
  color: inherit;
  font-size: inherit;
}


مثلاً در بعضی مرورگرها تگ‌هایی مثل <input> یا <button>
فونت و رنگ خودشون رو از parent نمی‌گیرن (چون توسط سیستم عامل رندر می‌شن).

✅ راه‌حل:

input, button {
  font: inherit;
  color: inherit;
}






* Box-shadow:

```css

```








