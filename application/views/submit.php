<html>
  <head>
    <title>해커톤 최종 제출시스템</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/assets/css/github-colors.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body class="swatch-github-gray-dark">
    <style>
    @font-face { 
      font-family: 'KHNPHD'; 
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_one@1.0/KHNPHD.woff') format('woff');
      font-weight: normal; 
      font-style: normal; 
    }
    body { font-family: "KHNPHD" }
    </style>
    <div style="color: #FFFFFF; text-align: center;">
      <br>
      <i class="fab fa-github fa-7x"></i>
      <h1 style="font-size: 180%;">프로젝트 Github 저장소의 링크를 제출해주세요!</h1>
     
 
      <div class="row" style="width: 80%;">
          <form action="submit.php" method="post" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <i style="color: #FFFFFF;" class="fas fa-coffee fa-2x"></i>
                <input  name="team_name" id="team" type="text" class="validate">
                <label for="team">Team name</label>
              </div>
              <div class="input-field col s6">
                <i style="color: #FFFFFF;" class="fas fa-code-branch fa-2x"></i>
                <input name="team_link" id="link" type="text" class="validate">
                <label for="link">Github Link to Repository</label>
              </div>
            </div>
          </form>
      </div>
      <!--  -->
      <p>Inapse 제 1회 해커톤, &lt;Rendezvous of the Past and the Future&gt; 에서는 Github 링크로 완성된 프로젝트의 소스코드를 제출받고 있습니다.</p>
      <p>만약 팀별 그룹을 새로 만들고, 서버/클라이언트 등으로 저장소를 만드신 경우 그룹 링크를 넣어주셔도 좋습니다.</p>
      <p>Github에 대해서는 
      <a class="color=var(--github-blue);" target="_blank" href="https://github.com/features">여기</a>를 참고하시고,
      제출 관련 내용은 운영진에게 말씀드리면 빠르게 처리해 드리겠습니다.</p>
    </div>
  </body>
</html>
