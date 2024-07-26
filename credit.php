<?php
  include "header.php";
?>
  <br>
  <div class="maincreditsgrid">
    <div id="break"></div>
    <div id="creditgrid" class="creditsgrid ">
      <div class="titletext bottompadding toppadding sidetosidepadding center background">Credit</div>
      <div class="creditgridspecific">
        <div class="center">Math Symbol used on the Home Page -> <a href="https://www.pngitem.com/middle/iomxoo_mathematics-cartoon-division-clip-art-math-symbols-hd/">https://www.pngitem.com/middle/iomxoo_mathematics-cartoon-division-clip-art-math-symbols-hd/</a></div>
        <div class="center">Science Symbol used on the Home Page -> <a href="https://www.pinterest.ca/pin/269793833901522646/ ">https://www.pinterest.ca/pin/269793833901522646/</a></div>
        <div class="center">English Symbol used on the Home Page -> <a href=" https://dlpng.com/png/6681381">https://dlpng.com/png/6681381</a></div>
        <div class="center">French Symbol used on the Home Page -> Could not find the link so the owner of that image can contact us at thektutoring@gmail.com so that we can credit them appropriately</div>
        <div class="center">Max Fischer is creditable for two of the images present on our individual programs pages -> <a href="https://www.pexels.com/@max-fischer">Visit Max Fischer's Page</a></div>
        <div class="center">R F Studio is creditable for one of the images present on our individual programs pages -> <a href="https://www.pexels.com/photo/unrecognizable-african-american-scientist-studying-anatomy-with-tablet-3825539/">Visit RF. Studio's Page</a></div>
        <div class="center">Kevin Ku is creditable for one of the images present on our individual programs pages -> <a href="https://www.pexels.com/@kevin-ku-92347">Visit Kevin Ku's Page</a></div>
        <div class="center">IB, Scitech and IBT page gif -> <a href="https://www.oildri.com/about/innovation/">https://www.oildri.com/about/innovation/</a></div>
        <div class="center">IB, Scitech IBT and AP admissions page gif -> <a href="https://institute.careerguide.com/do-grades-really-matter-for-success/">https://institute.careerguide.com/do-grades-really-matter-for-success/</a></div>
        <div class="center">Basic English page gif -> <a href="https://gfycat.com/gifs/search/abc+song">https://gfycat.com/gifs/search/abc+song</a></div>
        <div class="center">English K-8 page gif -> <a href="https://www.pinterest.ca/pin/488429522090303513/">https://www.pinterest.ca/pin/488429522090303513/</a></div>
        <div class="center">Science K-8 page gif -> <a href="https://www.ssae-eu.com/">https://www.ssae-eu.com/</a></div>
        <div class="center">French K-8 page gif -> <a href="https://lrdgcampus.com/">https://lrdgcampus.com/</a></div>
        <div class="center">English Gr.9-12 page gif -> <a href="https://www.pinterest.ca/pin/758364024744645914/">https://www.pinterest.ca/pin/758364024744645914/</a></div>
        <div class="center">Business Gr.9-12 page gif -> <a href=" https://giphy.com/explore/business-handshake"> https://giphy.com/explore/business-handshake</a></div>
        <div class="center">Math Gr.9-11 page gif -> <a href="https://gifer.com/en/gifs/math">https://gifer.com/en/gifs/math</a></div>
        <div class="center">Science Gr.9-10 page gif -> <a href="https://www.dave-dewitt.com/2018/01/21/my-dna-reveals-a-boring-yet-baffling-ancestry-2/">https://www.dave-dewitt.com/2018/01/21/my-dna-reveals-a-boring-yet-baffling-ancestry-2/</a></div>
        <div class="center">Coding page gif -> <a href="https://dribbble.com/shots/4171367-Coding-Freak">https://dribbble.com/shots/4171367-Coding-Freak</a></div>
      </div>
    </div>
    <div></div>
  </div>
  <br>
  <script>
  Element.prototype.appendBefore = function(element) {
    element.parentNode.insertBefore(this, element);
  }, false;

  Element.prototype.appendAfter = function(element) {
    element.parentNode.insertBefore(this, element.nextSibling);
  }, false;

  function credit(v) {
    if (v.matches) {
      document.getElementById('creditgrid').remove();
      var alert = document.createElement('div');
      alert.setAttribute('id', 'alert');
      alert.appendAfter(document.getElementById('break'));
      document.getElementById('alert').textContent = "Need Bigger Screen Size to View the credits";

    }
  }

  var v = window.matchMedia("(max-width: 350px)");
  credit(v);
  v.addListener(credit);
  </script>
<?php
  include 'footer.php';
?>
