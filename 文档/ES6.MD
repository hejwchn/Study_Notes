## 箭头函数
```js
//ES5
var fn = function(){

}
//ES6
var fn = ()=>{}
```
### 箭头函数与普通函数区别
1. 没有自己的this，指向window，无法使用new函数构造器
2. 