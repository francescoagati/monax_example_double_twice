import com.mindrocks.monads.instances.Prelude;

import com.mindrocks.monads.Monad;
import com.mindrocks.monads.instances.NodeJs;


class Obj {
  var name : String;
  public function new(name : String) {    
    this.name = name;
  }
}

class Collection {
  var objs : Array<Obj>;
  public function new() { 
    objs = [new Obj("a"), new Obj("b")];
  }
  public function all(name : Dynamic, cb : Error -> Array<Obj> -> Void) {    
    // cb("Aieeeuu!!", null);
    haxe.Timer.delay(function() {
      cb(null, objs);
    }, 1000);
        
  }
}

class DB {
  var coll : Collection;
  public function new() {
    coll = new Collection();
  }
  public function collection(name : String, cb : Error -> Collection -> Void) {

    haxe.Timer.delay(function() {
      cb(null, coll);
    }, 1000);
    
  }
}


class Main {
  
  public static function main(){
      
    var db = new DB();    
     var res5 : String = "";

     NodeM.dO({
       coll <= db.collection("avatars", _);
       avatars <= coll.all("ssss", _);
       ret(avatars.length);
     })(function (err, res) trace(res));
  
    
  }

}


