let showSkill = window.addEventListener('scroll', SkillCap);


function SkillCap(){

  if (window.scrollY >= 1000) {
    $(document).ready(function() {
      $('.progress .progress-bar').css("width",
        function() {
            return $(this).attr("aria-valuenow") + "%";
        }
      )
    });
  }
}
