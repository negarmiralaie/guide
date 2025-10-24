

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
16. rem - em - % - px
17. positions
18. media query









