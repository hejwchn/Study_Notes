# Vue2

[toc]

## 监听 watch
>  会在实例化时调用 $watch()，被监听数据变化时调用其对应方法
> 使用：数据变化时需要做异步或消耗较大性能时
> 类型：{ [key: string]: string | Function | Object | Array }
```js
// 参数
// 1. val（变化前的值）
// 2. oldval（变化后的值）

// 使用
data: {
    a: 1,
    b: 2,
    c: 3,
    d: {
      e: 4
    },
    f: {
      g: {
        h: 5,
        i: 6
      }
    }
  }
//----------------------------------------------------------------
// 一、键:方法
a: function (val, oldVal) { /* ... */ }
// 常简写为
a(){ /* ... */ }
//----------------------------------------------------------------
// 二、键:方法名（methods中写的方法）
b: 'someMethod'
//----------------------------------------------------------------
// 三、键:数组（逐一调用）
c: [
      'handle1',
      function handle2 (val, oldVal) { /* ... */ },
      {
        handler: function handle3 (val, oldVal) { /* ... */ },
      }
    ]
//----------------------------------------------------------------
// 四、字符串:方法（用于监控对象中的某个属性,字符串需要使用单引号）
'd.e': function (val, oldVal) { /* ... */ }
//----------------------------------------------------------------
// 五、immediate属性，监听开始就会立即调用
d: {
      handler: 'someMethod',
      immediate: true
    }
//----------------------------------------------------------------
// 六、deep属性，只要对象中的某个属性变化就会触发
f: {
      handler: function (val, oldVal) { /* ... */ },
      deep: true
    }
```
### Vue.set() / this.$set()
> 向一个响应式对象中添加属性，并确保新属性也是响应式，触发视图更新

```js
// 参数
// 1.target（对象或数组）
// 2.propertyName/index（属性名或下标）
// 3.value（值）

// 返回值（设置的值）
this.$set(obj, name, 'world')
```

### Object.values()
> 返回一个对象‘自身’的所有可枚举属性值的数组

```js
// 参数
// 1.obj（对象）

// 返回值（数组）
Object.values(obj);
```

### Object.assign()
> 将所有可枚举属性的值从一个或多个源对象分配到目标对象

```js
// 参数
// 1.target（目标对象）
// 2.source（源对象）

// 返回值（目标对象）
Object.assign(obj, obj1);
```

### this.$options.data()
> 存储着初始化前的data数据
```js

// 用于重置data数据
Object.assign(this.$data,this.$options.data()); 
//重置某些属性
this.record_data = this.$options.data.call(this).record_data
```

### Object.keys(target)
> 获取对象中的所有key值

```js
// 参数
// 1.target（目标对象）

// 返回值（数组）
Object.keys(obj).length === 0;
//判断obj对象中有没有值
```