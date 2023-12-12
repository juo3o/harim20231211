    <!-- 푸터영역시작 -->
    <footer>
        <div class="f_top">
            <nav class="f_nav">
                <a href="a.html" title="개인정보처리방침">개인정보처리방침</a>
                <a href="b.html" title="쇼핑몰이용약관">쇼핑몰이용약관</a>
            </nav>
            <dl>
                <dt>공지사항</dt>
                <dd><a href="#" title="지니펫">지니펫 X 한국헌혈견협회 '건강한' 밥이보약 상품출시</a></dd>
                <dd><span class="date">[2023-004-05]</span></dd>
            </dl>
        </div>

        <div class="f_bottom">
            <ul>
                <li>
                    <dl class="info">
                        <dt>주문배송 및 배송문의</dt>
                        <dd class="tel"><a href="tel:02-2189-6543" title="통화하기">02-2189-6543</a></dd>
                        <dd>평일 10:00 ~ 17:00 <br>(점심:12시 ~ 13시)</dd>
                    </dl>
                </li>
                <li>
                    <dl class="info">
                        <dt>고객센터</dt>
                        <dd class="tel"><a href="tel:080-250-2304" title="통화하기">080-250-2304</a></dd>
                        <dd>평일 10:00 ~ 17:00 <br>(점심:12시 ~ 13시)</dd>
                    </dl>
                </li>
                <li>
                    <a href="#" title=""><i class="fab fa-facebook"></i></a>
                    <a href="#" title=""><i class="fa-brands fa-blogger"></i></a>
                    <a href="#" title=""><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <!-- option중 하나 고르면 onchange=내용이 실행됨 -->
                    <select onChange="siteUrl(this);">
                        <option value="">Family Site</option>
                        <option value="https://www.harim.com/main/">(주)하림</option>
                        <option value="https://harimmall.com/">하림몰</option>
                        <option value="https://farmsco.com/">팜스코</option>
                        <option value="https://www.orimart.co.kr/">주원산오리</option>
                        <option value="https://www.nsmall.com/">NS홈쇼핑</option>
                        <option value="http://www.mexican.co.kr/">맥시칸치킨</option>
                    </select>
                </li>
            </ul>
            <address>
                <p>대전광역시 대덕구 벚꽃길71 (평촌동) &#65372; 상호 및 대표자 : (주)한국인삼공사 000 &#65372;
                    사업자번호 : 000-00-00000 &#65372; 통신판매업신고번호 : 제0000_대전대덕 사업자정보확인 &#65372; 
                    호스팅서비스 제공자 : (주)한국인삼공사
                </p>
                <P>Email : ginipet@kgc.co.kr</P>
                <p>Copyright &copy; 2018 by korea ginseng corp. all rights reserved.</p>
                <p>구매안전(에스크로)서비스 가입시설 확인 고객님은 안전거래를 위해 현금 등으로 결제시 저희 쇼핑몰에 가입한KCP의 구매안전서비스를
                    이용하실 수 있습니다.
                </p>
            </address>
        </div>
    </footer>

    </form>




    <script>
        //패밀리사이트 자바스크립트

        function siteUrl(a){
            // alert('선택했음!!!');
            
            if(a.value!='none'){ //옵션선택하여 값이 존재한다면
                window.open(a.value, '_self');} //현재창에서 사이트가 열리도록 한다
            else{  //선택하지 않으면
                return; //사이트 연결안됨.
                }
            }
        


        //로그인 아이디,패스워드 체크하기
        //사용자가 아이디,패스워드 입력시 맞는지틀린지 체크하여 결과 화면에 알려주기
        //1.사용자가 입력한 아이디값을 변수(데이터를기억하는메모리공간-임시)에 담는다.
        let id = document.getElementById('id_txt');
        let pw = document.getElementById('pw_txt');
        let login_btn = document.getElementById('login_btn');

        //2.로그인 버튼 클릭 시 id,pw값 출력한다.
        login_btn.addEventListener('click', login_check);

        function login_check(){
            console.log(id.value, pw.value);
            if(id.value=='admin'){
                if(pw.value=='1234'){
                    alert('관리자님 반갑습니다. 로그인 성공 되었습니다.');
                }
                else{
                    alert('패스워드가 일치하지 않습니다.');
                }
            }
            else{
                alert('아이디가 일치하지 않습니다.');
                location.reload(); //f5버튼과 같이 새로고침되어 사용자가 다시 입력할 수 있다.(=사용성)
            }
        }

    </script>

</body>

</html>
