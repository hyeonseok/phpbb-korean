<?php
/**
*
*이 파일은 korean Language Pack의 일부입니다.
* phpBB 포럼 소프트웨어.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU 일반 공중 라이선스, 버전 2 (GPL-2.0)
*
* 전체 저작권 및 라이센스 정보는 다음을 참조하십시오.
* docs / CREDITS.txt 파일
* korean translation	2015~ minwook shin @ https://github.com/minwook-shin/phpbb-korean
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => '유저가입 및 로그인'
	),
	array(
		0 => '로그인 할 수 없습니다.',
		1 => '이런 일이 일어나는 경우는 몇 가지 이유가 있습니다. 우선 당신의 아이디와 비밀번호가 올바른지 확인하세요. 올바르다면 운영자에게 연락해 당신이 추방된 것은 아닌지 확인하세요. 운영자가 설정할 때 오류가 있었을 수도 있습니다. 그렇다면 그들이 그것을 고쳐야 합니다.'
	),
	array(
		0 => '유저가입을 해야 하나요?',
		1 => '꼭 해야 하는 것은 아닙니다. 글을 올리기 위해 유저가입을 해야 하는지는 운영자의 결정에 달려있습니다. 하지만 가입을 하면 아바타, 개인 메시지, 메일링, 그룹 신청 등 손님에게 주어지지 않는 기능을 사용할 수 있습니다. 유저가입을 하는데는 단지 약간의 시간만 들이면 되므로 그렇게 하기를 권합니다.'
	),
	array(
		0 => '자동으로 로그아웃 되는 이유는 뭐죠?',
		1 => '로그인 할 때 <em>자동 로그인</em>를 선택하지 않았다면 설정된 시간 동안만 로그인 상태로 유지합니다. 이것은 다른 누군가가 당신의 계정을 사용하는 것을 막아줍니다. 계속 로그인 상태로 유지하려면 로그인 할 때 자동 로그인을 선택하세요. 도서관 또는 인터넷 카페, 대학 단말기 등 여러 사람이 쓰는 컴퓨터에서는 하지 않는 것이 좋습니다. 선택 박스가 보이지 않는다면 운영자가 이 기능을 사용하지 않는 것입니다.'
	),
	array(
		0 => '접속중인 유저 목록에 내 아이디가 나오지 않게 하려면 어떻게 하죠?',
		1 => '유저 컨트롤 패널의 게시판 설정에 <em>접속상태 비공개</em> 옵션이 있습니다. 이것을 <samp>그래요</samp>로 바꾸면 자신과 운영자, 포럼관리자에게만 보여집니다. 당신은 비공개 유저으로 카운트 됩니다.'
	),
	array(
		0 => '비밀번호를 잊었어요!',
		1 => '당황하지 마세요. 비밀번호를 알 수는 없지만 다시 설정할 수 있습니다. 로그인 페이지에서 <em>비밀번호 찾기</em>를 클릭한 다음 지시를 따르면 다시 로그인 할 수 있습니다.'
	),
	array(
		0 => '유저가입 했는데 로그인 할 수 없습니다!',
		1 => '우선 아이디와 비밀번호가 올바른지 확인하세요. 이상이 없다면 다음 중 한 경우일 수 있습니다. COPPA(Children\'s Online Privacy Protection Act) 지원을 사용하고, <em>13세 이하</em>로 유저 가입을 했다면, 당신은 당신이 받은 지시를 따라야만 합니다. 몇몇 게시판은 새로 가입 시 로그인 하기 전에 스스로 또는 운영자에 의한 계정 활성화가 필요합니다. 이 정보는 유저가입 할 때 말해줍니다. 그 때에 e-메일이 왔다면 그 지시를 따르고, e-메일을 오지 않았다면 e-메일 주소가 올바른지 또는 스팸필터에 걸렸는지 확인하세요. 계정 활성화를 사용하는 한가지 이유는 <em>찌질이</em>가 익명으로 게시판을 남용할 가능성을 줄이기 위함입니다. 사용하는 e-메일 주소가 확실하다면 운영자에게 연락하세요.'
	),
	array(
		0 => '예전에 유저가입 했는데 지금은 로그인 할 수 없습니다?!',
		1 => '처음 가입할 때 받은 e-메일을 통해 아이디와 비밀번호를 확인한 후 다시 해보세요. 아니면 운영자가 어떤 이유로 당신의 계정을 없애거나 비활성화 했을 수 있습니다. 일반적으로 데이터베이스 크기를 줄이기 위해 오랫동안 글을 올리지 않은 유저을 삭제합니다. 다시 유저가입을 한 후 토론에 참여하기 바랍니다.'
	),
	array(
		0 => 'COPPA 가 뭐죠?',
		1 => 'COPPA(the Child Online Privacy and Protection Act of 1998) 는 13세 미만 청소년으로부터 잠재적으로 정보를 모을 수 있는 웹사이트에 적용되는 미국의 법률로, 그 부모나 법적 보호자가 서면 또는 다른 방법으로 인정해야만 13세 미만 청소년의 개인 식별 정보를 모을 수 있도록 되어있습니다. 유저가입 하려는 웹사이트나 자신에게 적용되는지 확인할 수 없다면 법률가에게 도움을 받으세요. phpBB Group 은 법률 조언을 할 수 없고, 아래에 제시된 것 외의 어떤 법률 관계도 없습니다.',
	),
	array(
		0 => '유저가입 할 수 없어요.',
		1 => '웹사이트 주인이 가입하려는 아이디를 허용하지 않았거나 당신의 IP 주소를 거부했을 수 있습니다. 웹사이트 주인은 새로운 손님을 막기 위해 유저가입 자체를 허용하지 않을 수 있습니다. 도움이 필요하면 운영자에게 연락하세요.',
	),
	array(
		0 => '“게시판 쿠키 모두 지우기” 는 뭘 하는 거죠?',
		1 => '“게시판 쿠키 모두 지우기” 는 당신의 등록을 확인하고 게시판으로 로그인 할 때 phpBB 가 만든 쿠키를 지웁니다. 또한 쿠키는 게시판 주인이 허용했다면 읽기 추적과 같은 기능도 합니다. 로그인이나 로그아웃 문제가 있다면 게시판 쿠키를 지우는 것이 도움이 될 수 있습니다.',
	),
	array(
		0 => '--',
		1 => '개인정보/환경설정'
	),
	array(
		0 => '내 설정을 바꾸려면 어떻게 하죠?',
		1 => '유저가입 했다면 자신의 설정은 게시판 데이터베이스에 저장되어 있습니다. 그것을 바꾸려면 일반적으로 페이지 맨 위에 있는 링크를 클릭해 당신의 유저 컨트롤 패널에 들어오세요. 여기에서 당신의 모든 설정과 개인정보를 바꿀 수 있습니다.'
	),
	array(
		0 => '시간이 맞질 않아요!',
		1 => '당신이 있는 곳과 다른 시간대의 시간을 보는 것일 수 있습니다. 만일 이 경우라면 유저 컨트롤 패널에서 서울, 런던, 파리, 시드니, 뉴욕 등 각각의 지역에 맞는 시간대를 설정해야 합니다. 다른 대부분의 설정과 마찬가지로 시간대를 바꾸는 것은 가입한 유저만 할 수 있습니다. 그러니 아직 가입하지 않았다면 이제 할 때입니다.'
	),
	array(
		0 => '시간대를 바꿨는데 여전히 시간이 맞질 않아요!',
		1 => '시간대와 서머타임/DST(daylight savings time, 일광 절약 시간제)를 올바로 설정했음에도 여전히 시간이 잘 못 되었다면 서버의 시간이 잘 못 설정된 것일 수 있습니다. 운영자에게 문제를 알려주세요.'
	),
	array(
		0 => '사용하는 언어가 없어요!',
		1 => '당신의 언어로 번역하지 않았거나 운영자가 설치하지 않은 것입니다. 운영자에게 당신이 원하는 언어 꾸러미를 설치할 수 있는지 문의하세요. 만일 그것이 없다면 번역해보세요. phpBB Group 웹사이트에서 더 많은 정보를 찾을 수 있습니다. (페이지 아래쪽에 링크가 있을 겁니다.)'
	),
	array(
		0 => '아이디 아래쪽 이미지는 어떻게 넣죠?',
		1 => '글을 볼 때 아이디 아래에 두개의 이미지가 있을 겁니다. 사용하는 스타일에 따라 다를 수 있지만 첫번째는 당신의 계급 이미지로, 포럼에 얼마나 많은 글을 올렸는지 혹은 포럼에서의 지위가 무엇인지를 나타내는 별이나 블럭과 같은 이미지입니다. 그 아래가 아바타라고 알고 있는 더 큰 이미지로, 한 유저에게 개인적이고 고유합니다. 아바타를 사용할지, 어떻게 사용할지 등은 운영자의 선택에 달려있습니다. 만일 아바타를 사용할 수 없다면 그것은 운영자의 결정일 겁니다. 그들에게 이유를 물어보세요.'
	),
	array(
		0 => '계급은 어떻게 바꾸죠?',
		1 => '아이디 아래에 나오는 올린 글 수 혹은 특정 유저을 구별하는데 사용합니다. 예를 들면 운영자나 포럼관리자는 특별 계급을 가질 수 있습니다. 일반적으로 운영자가 설정한 계급 이름을 직접 바꿀 수는 없습니다. 단순히 자신의 계급을 높이기 위해 쓸데 없는 글을 올리지 마세요. 대부분의 게시판은 이에 대해 관대하지 않으며 아마도 운영자나 포럼관리자에 의해 간단하게 글 수가 낮아지게 될 것입니다.'
	),
	array(
		0 => 'e-메일 링크를 클릭하면 로그인 하라는군요?',
		1 => '운영자가 그 기능을 허용한 경우에 가입한 유저만 포함된 e-메일 틀을 이용해 e-메일을 보낼 수 있습니다. 이것은 익명의 유저가 e-메일 시스템을 악의적으로 이용하는 것을 막기 위한 것입니다.'
	),
	array(
		0 => '--',
		1 => '글 올리기'
	),
	array(
		0 => '포럼에 글을 올리려면 어떻게 하죠?',
		1 => '포럼에 새 글을 올리려면, 포럼이나 글타래 페이지에서 관련 버튼을 클릭하세요. 글을 올리기 위해 어쩌면 유저가입을 해야 할 수도 있습니다. 포럼이나 토픽 페이지 아래쪽에 사용 가능한 기능 목록이 있습니다. (이 포럼에서 새 글타래를 올릴 수 있습니다. 이 포럼에서 투표를 할 수 있습니다. 등)'
	),
	array(
		0 => '글을 고치거나 지우는 것은 어떻게 하죠?',
		1 => '운영자나 포럼관리자가 아니라면 오직 자신이 올린 글만 고치거나 지울 수 있습니다. 관련글의 <em>고치기</em> 버튼을 클릭해 글을 고칠 수 있습니다. 글을 올린지 약간의 시간이 지난 후에만 가능한 경우도 있습니다. 이미 누군가가 댓글을 달았다면, 글 아래 몇 날 몇 시에 몇 번이나 고쳤는지에 대해 조그마한 설명이 들어갑니다. 물론 댓글이 달리지 않았다면 나타나지 않으며, 운영자나 포럼관리자가 고친 경우에도 나타나지 않습니다. 그들은 왜 고쳤는지 글을 남길 것입니다. 일반 유저은 댓글이 달리면 글을 지울 수 없다는 것을 기억해 두세요.'
	),
	array(
		0 => '글 아래에 어떻게 서명을 넣죠?',
		1 => '서명을 넣으려면 먼저 유저 컨트롤 패널에서 서명을 만들어야 합니다. 서명을 만들면 글쓰기 틀에서 <em>서명 달기</em> 를 선택해 서명을 넣을 수 있습니다. 개인정보에서 라디오 버튼을 체크해 서명 넣는 것을 기본으로 할 수도 있습니다. 이때 글쓰기 틀에서 서명 달기를 선택 해제하면 그 글만 서명을 넣지 않을 수 있습니다.'
	),
	array(
		0 => '투표는 어떻게 만들죠?',
		1 => '새 글타래를 올릴 때나 글타래의 첫번째 글을 고칠 때 글 상자 아래쪽에 <em>투표 하기</em> 틀을 볼 수 있습니다. 보이지 않는다면 투표를 만들 권한이 없는 것입니다. 투표 내용과 두개 이상의 보기를 입력해야 하며 각각의 보기는 글상자에서 줄바꿈으로 구분합니다. 유저이 고를 수 있는 보기의 수를 정할 수 있으며, 투표 기간을 제한하는 것도 가능한데 0 을 입력하면 무제한입니다. 마지막 옵션은 유저이 그들의 투표를 바꿀 수 있도록 설정합니다.'
	),
	array(
		0 => '왜 투표 보기를 더 추가할 수 없죠?',
		1 => '투표 보기는 운영자의 설정에 따라 제한됩니다. 자신의 투표에 허용된 것 보다 더 많은 보기가 필요하다고 생각하면 운영자에게 연락하세요.'
	),
	array(
		0 => '투표를 고치거나 지우는 것은 어떻게 하죠?',
		1 => '글과 마찬가지로 투표는 운영자나 포럼관리자, 올린이만이 고칠 수 있습니다. 투표를 고치려면 글타래의 첫번째 글에서 고치기 버튼을 클릭하세요. (투표는 항상 첫번째 글과 연결되어 있습니다.) 아무도 투표하지 않았다면 보기를 고치거나 투표를 지울 수 있지만, 누군가 투표를 했다면 운영자나 포럼관리자만이 그것을 고치거나 지울 수 있습니다. 이것은 투표중에 보기를 바꿔 결과를 조작하는 것을 막기 위해서입니다.'
	),
	array(
		0 => '포럼을 볼 수 없는 이유는 뭐죠?',
		1 => '몇몇 포럼은 특정한 유저이나 그룹에게 제한 될 수 있습니다. 보기, 읽기, 쓰기 등을 하려면, 운영자나 포럼관리자만이 할 수 있는 특별한 인증이 필요하므로 그들에게 연락해야 합니다.'
	),
	array(
		0 => '파일 첨부를 할 수 없습니다.',
		1 => '파일 첨부 권한은 각 유저 및 그룹, 포럼에 따라 다릅니다. 운영자가 당신이 글을 올리려는 포럼에서 파일 첨부를 허용하지 않았거나 특정 그룹에게만 허용했을 수 있습니다. 왜 파일 첨부를 할 수 없는지 확인할 수 없다면 운영자에게 연락하세요.'
	),
	array(
		0 => '내가 왜 주의를 받았죠?',
		1 => '각 운영자는 그들의 사이트에 일련의 규칙을 만들어 둡니다. 당신이 규칙을 어기면 주의를 받을 것입니다. 이것은 운영자의 결정에 따른 것이며 phpBB Group 은 주의를 준 사이트와 전혀 관련이 없습니다. 왜 주의를 받았는지 확인할 수 없다면 운영자에게 연락하세요.'
	),
	array(
		0 => '포럼관리자에게 글을 신고하려면 어떻게 하죠?',
		1 => '운영자가 허용했다면 신고하려는 글 다음에 글 신고하기 버튼이 보일 것입니다. 이것을 클릭한 후 글을 신고하는 데 필요한 절차를 밟으세요.'
	),
	array(
		0 => '글 올리는 곳의 “저장” 버튼은 뭐죠?',
		1 => '마치고 제출할 때까지 글을 보관하는 것입니다. 보관한 글을 다시 불러오려면 유저 컨트롤 패널으로 가세요.'
	),
	array(
		0 => '내 글은 어째서 승인이 필요하죠?',
		1 => '운영자는 당신의 글을 포럼에 올리기 앞서 살펴보도록 결정했을 수 있습니다. 아니면 당신을 글을 올리기에 앞서 살펴보도록 결정한 그룹에 넣었을 수도 있습니다. 자세한 것은 운영자에게 연락하세요.'
	),
	array(
		0 => '내 글타래를 끌어 올리려면 어떻게 하죠?',
		1 => '글타래를 볼 때 “글타래 올리기” 링크를 클릭해서 그 글타래를 포럼의 첫 페이지 맨 위로 올릴 수 있습니다. 하지만 이것을 볼 수 없다면 글타래 올리기를 허용하지 않았거나 정해진 올리기 시간이 되지 않은 것입니다. 또한 간단하게 댓글을 다는 것만으로 글타래를 올릴 수 있습니다. 아무튼 이것을 할 때는 게시판 규칙을 따르세요.'
	),
	array(
		0 => '--',
		1 => '서식과 글타래 유형'
	),
	array(
		0 => 'BBCode 가 뭐죠?',
		1 => 'BBCode 는 HTML 을 이용하기 위한 특별한 형태로 자신이 글을 올릴 때 BBCode 를 사용할 수 있는지는 운영자의 결정에 달려있습니다. 추가로 당신은 글쓰기 틀에서 각 글별로 BBCode 를 사용하지 않도록 할 수도 있습니다. BBCode 는 그 형태가 HTML 과 비슷합니다. 태그는 &lt; 와 &gt; 대신 대괄호 [ 과 ] 으로 감싸고, 무엇을 어떻게 표시할지 훌륭하게 조절할 수 있습니다. BBcode 에 관한 더 많은 정보는 글쓰기 페이지에서 볼 수 있는 안내서를 참조하세요.'
	),
	array(
		0 => 'HTML 을 사용할 수 있나요?',
		1 => '안됩니다. 이 게시판에서 글을 올릴 때 HTML을 쓰거나 그것을 표시하는 것은 불가능합니다. 대신 BBCode 를 사용해 HTML 로 나타낼 수 있는 대부분의 서식을 할 수 있습니다.'
	),
	array(
		0 => '이모티콘은 뭐죠?',
		1 => '이모티콘은 짧은 코드로 감정을 나타내는 조그마한 그래픽 이미지입니다. 예를 들어 :) 는 행복하다, :( 는 슬프다 등... 모든 이모티콘 목록은 글쓰기 틀에서 볼 수 있습니다. 이모티콘을 지나치게 많이 쓰지는 마세요. 그렇게 하면 글을 읽기 어렵기 때문에 포럼관리자가 고쳐서 지우거나 글 자체를 없앨 수도 있습니다. 운영자는 글에 쓸 수 있는 이모티콘 수를 제한 할 수 있습니다.'
	),
	array(
		0 => '이미지를 올릴 수 있나요?',
		1 => '물론 글에 이미지를 보이게 할 수 있습니다. 만일 운영자가 파일 첨부를 허용했다면 이미지를 게시판에 업로드 할 수 있습니다. 다른 방법으론 공개 웹서버에 있는 이미지를 링크할 수도 있습니다. 공개 웹서버가 아닌 자신의 PC 나 인증이 필요한 서버(hotmail 이나 yahoo 메일박스, 비밀번호가 걸려있는 서버 등)에 저장된 이미지는 링크할 수 없습니다. 이미지를 출력하려면 BBCode 의 [img] 태그를 사용하세요.'
	),
	array(
		0 => '전체공지가 뭐죠?',
		1 => '전체공지는 포럼의 중요한 정보를 담고 있으므로 가능하면 바로 읽어보는 것이 좋습니다. 전체공지는 모든 포럼의 맨 위쪽과 당신의 유저 컨트롤 패널에 나타납니다. 전체공지 권한은 운영자가 정합니다.'
	),
	array(
		0 => '공지는 뭐죠?',
		1 => '공지는 포럼의 중요한 정보를 담고 있으므로 가능하면 바로 읽어보는 것이 좋습니다. 공지는 게시된 포럼의 모든 페이지 위쪽에 전체공지와 함께 나타납니다. 공지 권한은 운영자가 정합니다.'
	),
	array(
		0 => '필독은 또 뭐죠?',
		1 => '필독은 포럼에서 모든 공지 다음에 위치하며 첫 페이지에만 나타납니다. 그것은 중요한 정보이므로 가능하면 읽는 것이 좋습니다. 전체공지나 공지와 마찬가지로 필독 권한은 운영자가 정합니다.'
	),
	array(
		0 => '잠긴 글타래는 뭐죠?',
		1 => '잠긴 글타래는 운영자나 포럼관리자가 잠근 것입니다. 잠긴 글타래에는 댓글을 달 수 없으며 포함된 투표는 자동으로 종료됩니다. 글타래가 잠기는데는 많은 이유가 있습니다.'
	),
	array(
		0 => '글타래 아이콘은 뭐죠?',
		1 => '글타래 아이콘은 그 글을 드러내기 위해 글쓴이가 선택한 내용과 연관이 있는 이미지입니다. 글타래 아이콘을 사용할 수 있는지는 운영자가 정한 권한에 따릅니다.'
	),
	array(
		0 => '--',
		1 => '유저 지위와 그룹'
	),
	array(
		0 => '운영자라고?',
		1 => '운영자는 게시판 전체를 가장 높은 수준으로 조절할 수 있도록 지정된 유저입니다. 운영자는 권한 설정, 유저 정리, 그룹 및 포럼관리자 만들기 등 게시판의 모든 항목을 조절할 수 있으며 게시판 발기인에 따라 다른 운영자의 권한을 줄 수도 있습니다. 이들은 또한 게시판 발기인에 따라 모든 포럼에서 포럼관리자의 권한도 가지고 있습니다.'
	),
	array(
		0 => '포럼관리자는 또 뭐죠?',
		1 => '포럼관리자는 나날이 포럼의 운영을 돌보는 사람 (또는 그런 사람의 그룹)입니다. 이들은 관리하는 포럼에서 글타래를 잠그거나 잠금 해제, 옮김, 지움, 나눌 수 있고 글을 고치거나 지울 수 있는 권한이 있습니다. 일반적으로 포럼관리자는 <em>글타래를 벗어나거나</em> 욕설 혹은 공격적인 글을 막는 역할을 합니다.'
	),
	array(
		0 => '그룹은 뭐죠?',
		1 => '그룹은 운영자가 유저을 구분짓는 방법입니다. 각 유저은 여러 그룹에 속할 수 있으며, 각 그룹은 개별 접근권한을 갖습니다. 이것은 운영자가 몇몇 유저을 포럼관리자로 정하거나, 비공개 포럼의 접근권한을 주는 것 등을 쉽게 합니다.'
	),
	array(
		0 => '그룹은 어디에 있고 어떻게 들어가죠?',
		1 => '유저 컨트롤 패널의 그룹 링크를 클릭하면 모든 그룹을 볼 수 있습니다. 그중 하나에 가입하려면 관련 버튼을 클릭하세요. 모든 그룹이 <em>접근 공개</em>는 아니어서 일부는 가입 승인이 필요하고 ,일부는 닫혀있거나 숨어있을 수 있습니다. 만일 그룹이 열려있다면 적합한 버튼을 클릭해 가입할 수 있고, 가입 승인이 필요하다면 적합한 버튼을 클릭해 가입요청을 할 수 있습니다. 그 그룹관리자의 승인이 필요하며 어쩌면 당신에게 그룹에 들어오는 이유를 물을 수도 있습니다. 만일 그들이 당신의 요청을 거부하더라도 그룹관리자를 괴롭히지 말기 바랍니다. 그들은 나름대로 이유가 있을 겁니다.'
	),
	array(
		0 => '어떤 그룹의 그룹관리자를 하려면 어떻게 해야 하죠?',
		1 => '일반적으로 그룹관리자는 운영자가 처음에 그룹을 만들 때 임명합니다. 만일 그룹을 만드는데 흥미가 있다면 먼저 개인 메시지를 보내 운영자와 연락하세요.'
	),
	array(
		0 => '어떤 그룹은 다른 색상으로 나옵니다.',
		1 => '운영자는 어떤 그룹의 일원을 쉽게 구분하기 위해 색상을 지정할 수 있습니다.'
	),
	array(
		0 => '“기본 그룹” 이 뭐죠?',
		1 => '당신이 여러 그룹의 일원인 경우, 그룹 색상이나 그룹 계급을 나타내는데 기본 그룹의 값을 사용합니다. 운영자의 설정에 따라 다르지만 유저 컨트롤 패널에서 기본 그룹을 바꿀 수 있습니다.'
	),
	array(
		0 => '“운영진” 링크는 뭐죠?',
		1 => '이 페이지는 운영자 및 포럼관리자와 그들이 관리하는 포럼에 대한 세부사항 목록을 보여줍니다.'
	),
	array(
		0 => '--',
		1 => '개인 메시지 보내기/받기'
	),
	array(
		0 => '개인 메시지를 보낼 수 없어요!',
		1 => '세가지 이유가 있습니다. 당신이 유저가입 혹은 로그인 하지 않았거나, 운영자가 게시판 전체의 개인 메시지 기능을 사용하지 않거나, 운영자가 당신의 개인 메시지 기능을 막은 것입니다. 더 많은 정보는 운영자에게 문의하세요.'
	),
	array(
		0 => '계속 원치 않는 개인 메시지가 와요!',
		1 => '유저 컨트롤 패널에서 개인 메시지 규칙을 사용해 당신에게 개인 메시지 보내는 유저을 차단할 수 있습니다. 누군가로부터 원치 않는 개인 메시지를 계속 받는다면 운영자에게 알리세요. 이들은 유저에게 개인 메시지를 보내지 못 하도록 할 수 있는 권한이 있습니다.'
	),
	array(
		0 => '이 게시판의 누군가로부터 스팸메일과 욕설이 담긴 e-메일을 받았습니다!',
		1 => '유감입니다. 이 게시판의 e-메일 틀은 그런글을 보내는 유저이 누구인지 추적하기 위한 보호 수단을 포함하고 있습니다. 당신이 받은 e-메일 전체를 첨부해 운영자에게 보내세요. e-메일을 보낸 유저의 자세한 정보가 들어있는 헤더를 포함하는 것이 매우 중요합니다. 운영자가 곧 초치를 취할 것입니다.'
	),
	array(
		0 => '--',
		1 => '친구와 싫어하는 친구'
	),
	array(
		0 => '친구와 싫어하는 친구 목록은 뭐죠?',
		1 => '게시판의 다른 유저에게 이 목록을 사용할 수 있습니다. 친구 목록에 추가된 유저은 접속 상태를 보거나 개인 메시지를 쉽게 보낼 수 있도록 당신의 유저 컨트롤 패널에 나열됩니다. 템플릿에서 지원된다면 친구의 글은 강조되어 보입니다. 또한 싫어하는 친구 목록에 추가된 유저이 올린글은 기본적으로 보이지 않게 됩니다.'
	),
	array(
		0 => '친구와 싫어하는 친구 목록에 유저을 추가하거나 없애는 것은 어떻게 하죠?',
		1 => '유저을 목록에 추가하려면 두가지 방법이 있습니다. 우선 각 유저의 개인정보를 보면 그 유저을 친구나 싫어하는 친구 목록에 추가할 수 있는 링크가 있습니다. 다른 방법은 유저 컨트롤 패널에서 그 유저의 아이디를 입력해 직접 추가하는 것입니다. 또한 그 페이지에서 목록에 있는 유저을 없앨 수도 있습니다.'
	),
	array(
		0 => '--',
		1 => '포럼에서 찾기'
	),
	array(
		0 => '포럼에서 찾고 싶은 것이 있어요.',
		1 => '인덱스나 포럼, 글타래 페이지에 있는 찾기 상자에 찾고자 하는 것을 입력하세요. 자세히 찾으려면 포럼의 어느 페이지에서라도 “자세히 찾기” 링크를 클릭하면 됩니다. 찾기 페이지에 접근하는 것은 사용하는 스타일에 따라 다를 수 있습니다.'
	),
	array(
		0 => '찾은 결과가 없다고 합니다.',
		1 => '찾으려는 것이 너무 애매하고 phpBB3가 인덱스 하지 않는 일반적인 단어입니다. 자세히 찾으려면 여러 옵션을 이용해 보다 구체적으로 찾아보세요.'
	),
	array(
		0 => '찾으면 빈 페이지가 나옵니다!?',
		1 => '웹서버에서 당신이 찾는 것에 대해 너무 많은 결과를 내보냈습니다. “자세히 찾기”에서 찾으려는 포럼과 더 구체적인 정보로 찾아보세요.'
	),
	array(
		0 => '유저은 어떻게 찾죠?',
		1 => '“유저 목록”페이지에서 “유저 찾기” 링크를 클릭하세요.'
	),
	array(
		0 => '내가 올린 글타래와 글을 볼 수 있는 방법은 없나요?',
		1 => '글을 찾으려면 유저 컨트롤 패널에서 “내가 올린 글 보기”링크를 클릭하거나 당신의 개인정보 페이지에서 “유저의 글 찾기”링크를 클릭하세요. 글타래를 찾으려면 자세히 찾기에서 여러 옵션에 적절한 값을 입력하세요.'
	),
	array(
		0 => '--',
		1 => '글타래 마크 및 북마크'
	),
	array(
		0 => '마크와 북마크는 뭐가 다른 거죠 ?',
		1 => 'phpBB3 에서의 북마크는 웹 브라우저에서의 북마크와 비슷합니다. 업데이트 되는 것을 알 수는 없어도 나중에 그 글타래를 찾아볼 수 있습니다. 마크는 당신이 정한 방법을 통해 글타래나 포럼이 업데이트 되는 것을 통지합니다.'
	),
	array(
		0 => '특정 포럼이나 글타래를 지켜보려면 어떻게 하죠?',
		1 => '특정 포럼을 지켜보려면 그 포럼에 가서 “포럼 마크”를 클릭하세요. 글타래를 지켜보려면 그 글타래에서 “글타래 마크” 링크를 클릭하거나 댓글을 달 때 마크 체크박스를 선택하면 됩니다.'
	),
	array(
		0 => '마크를 그만두고 싶어요.',
		1 => '유저 컨트롤 패널에서 마크 관리 링크를 통해 마크를 없앨 수 있습니다.'
	),
	array(
		0 => '--',
		1 => '파일 첨부'
	),
	array(
		0 => '이 게시판에 첨부할 수 있는 파일은 어떤 건가요?',
		1 => '운영자는 각 게시판별로 허용하거나 금지할 첨부파일 유형을 정할 수 있습니다. 무엇을 올릴 수 있는지 알 수 없다면 운영자에게 연락해 도움을 받으세요.'
	),
	array(
		0 => '내가 첨부한 파일을 다 볼 수 있나요?',
		1 => '유저 컨트롤 패널에서 첨부파일 관리 링크를 통해 자신이 올린 첨부파일 목록을 볼 수 있습니다.'
	),
	array(
		0 => '--',
		1 => 'phpBB 관련'
	),
	array(
		0 => '누가 이 게시판을 만들었죠?',
		1 => '이 소프트웨어(변경되지 않은 상태의)는 <a href="http://www.phpbb.com/">phpBB Group</a> 에 의해 만들어지고, 배포되었으며, 그들에게 저작권이 있습니다. 이것은 GNU General Public License 하에 자유롭게 배포될 수 있도록 되어있습니다. 자세한 것은 링크를 참조하세요.'
	),
	array(
		0 => '필요한 기능이 있는데...',
		1 => '이 소프트웨어는 phpBB Group 에 의해 만들어지고 라이선스 되었습니다. 어떤 기능이 추가될 필요가 있다고 믿는다면 phpbb.com 웹사이트를 방문해서 phpBB Group 의 의견을 보세요. phpbb.com 의 게시판에 기능 요청 글을 올리지는 말기 바랍니다. phpBB Group 은 sourceforge 를 통해 새 기능 추가 작업을 처리하고 있습니다. 포럼을 통독하고 만일 있다면 의견을 보기 바랍니다. 기능에 대한 우리의 입장은 이미 준비되어 있으며 거기에 주어진 절차를 따르세요.'
	),
	array(
		0 => '이 게시판에 관련된 법률문제나 남용에 대해선 누구에게 연락해야 하죠?',
		1 => '“패거리” 페이지 목록 중 당신의 불만에 적합한 운영자에게 연락하세요. 만일 대답이 없다면 (<a href="http://www.google.com/search?q=whois">whois lookup</a>을 통해) 도메인 소유자에게 연락하거나, 무료 서비스(mireene.com, yahoo, free.fr, f2s.com 등)에서 운영되고 있다면 그 서비스의 운영자나 관련부서에게 연락하세요. phpBB Group 은 이 게시판이 누구에 의해, 어디서, 어떻게 쓰여지는지 전혀 조절할 수 없고 책임질 수 있는 방법도 없답니다. phpbb.com 웹사이트와 직접적인 관련이 없는 문제, phpBB 자체와 별개인 소프트웨어 문제, 명예훼손 글 등 어떤 법적인 문제에 대해서도 phpBB Group 에게 연락하지 마세요. 만일 phpBB Group 에게 이 소프트웨어를 쓰는 제 3자에 대한 e-메일을 보내면 간결한 답을 받거나 아무런 답도 받지 못 할 수 있습니다.'
	)
);