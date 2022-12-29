import React from 'react';
import ReactDOM from 'react-dom/client';

import '../../css/button.css';

function FooterButtons() {
  return (
    <>
        {/* TOPへのリンク */}
        <div className="footerButton">
            <a href="home" className="footerButton-a"><i className="fas fa-home"></i> TOP</a> 
        </div>
        {/* 検索へのページ内リンク */}
        <div className="footerButton">
            <a href="#search-within-site" className="footerButton-a"><i className="fas fa-search"></i> 検索</a> 
        </div>
        {/* タグへのページ内リンク */}
        <div className="footerButton">
            <a href="#tag-list" className="footerButton-a"><i className="fas fa-tag"></i> タグ</a> 
        </div>
        {/* タグへのページ内リンク */}
        <div className="footerButton">
            <a href="chat" className="footerButton-a"><i className="fas fa-tag"></i> チャット</a> 
        </div>
    </>
  );
  }

export default FooterButtons;

if (document.getElementById('footerButtons')) {
    const Index = ReactDOM.createRoot(document.getElementById("footerButtons"));

    Index.render(
        <React.StrictMode>
            <FooterButtons/>
        </React.StrictMode>
    )
}