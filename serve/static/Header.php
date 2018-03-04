<nav id="header">

    <div class="l" onclick="window.location.href='/';">Logo</div>

    <div class="l"><a href="/fees" class="t">Fees</a></div>
    <div class="l"><a href="/faq" class="t">FAQ</a></div>
    <div class="l"><a href="#contact" class="t contact">Contact</a></div>

    <div class="l r has-b"><a href="/mix" class="b <?=(Router::first()=='mix')?"on":""?>"><?=(Router::first()=='mix')?"Blending":"Blend"?></a></div>

    <div class="l r has-b" style="padding-right: 10px;"><a href="#lol"
      style="background-image: url('http://www.nmafbs.org/wp-content/uploads/2018/01/twitter-2012-negative-logo-5C6C1F1521-seeklogo.com_.png'); background-size: cover; background-position: center;"
      class="b"></a></div>

</nav>

<section id="modal-contact" class="cmodal-container">
  <div class="cmodal-dialog">
    <svg class="cmodal-svg" viewBox="0 0 100 100" preserveAspectRatio="none">
      <polygon class="cmodal-polygon" />
    </svg>
    <div class="cmodal-content">
      <h2>I'm a modal</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis excepturi ut inventore consectetur quos rerum quibusdam accusamus, labore itaque assumenda consequatur cum saepe velit quidem ipsa facilis. Repellendus, reiciendis quam?</p>
    </div>
  </div>
</section>
