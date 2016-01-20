#All features of gwtphp-derpc

# Features #

  * all primitive types are transformed in native php types
| **Java primitives** | **Php types** |
|:--------------------|:--------------|
| byte                | integer       |
| short               | integer       |
| int                 | integer       |
| long                | integer/floating point number (depending of value) |
| float               | floating point number |
| double              | floating point number |
| boolean             | booleans      |
| char                | string (one character length) |

  * all primitive object types (Byte, Short, Integer, Long, Float, Double, Boolean, Character) are transformed in native php types. You can create one of these type by :
```
new Integer($value); 
```
  * Array is supported. Use php array. ```java
 new String[] {"Hello", "the", "world"} ``` is converted into ```php
array('Hello', 'the', 'world')```
  * enums are supported. Enum types are translated in php file with a class with the enum name. Use the notation Color::RED to access the member RED of the enum Color (Color.RED).
  * enclosing types are supported.
  * List, Set and Map are supported. In php :
```
$list = new ArrayList();
$list->add('Hello');
$list->add('the');
$list->add('world');

$map = new HashMap();
$map->put(1, 'Hello');
```