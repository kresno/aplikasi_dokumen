<main>
  <div class="container">
    <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
      <li class="tab"><a href="#test1">Test 1</a></li>
      <li class="tab"><a class="active" href="#test2">Test 2</a></li>
      <li class="tab"><a href="#test3">Test 3</a></li>
      <li class="tab"><a href="#test4">Test 4</a></li>
      <li class="tab"><a href="#test0">Test 5</a></li>
    </ul>
    <div id="test1" class="col s12"><p>Test 1</p></div>
    <div id="test2" class="col s12"><p>Test 2</p></div>
    <div id="test3" class="col s12"><p>Test 3</p></div>
    <div id="test4" class="col s12"><p>Test 4</p></div>
    <div id="test0" class="col s12"><p>Test 5</p></div>
  </div>
</main>

<script type="text/javascript">
var instance = M.Tabs.init(el, options);

// Or with jQuery

$(document).ready(function(){
  $('.tabs').tabs();
});

</script>
