import React from 'react';
import ReactDOM from 'react-dom/client';

import Comment from './Comment';

function CommentBox() {
    return (

        <div className="chat-container adjustedRow justify-content-center">
            <div className="chat-area">
                <div className="card">
                    <div className="card-header">Comment</div>
                        <div className="card-body chat-card">
                            <Comment />
                            <Comment />
                            <Comment />
                        </div>
                </div>
            </div>
        </div>

    );
}

export default CommentBox;

if (document.getElementById('commentBox')) {
    const Index = ReactDOM.createRoot(document.getElementById("commentBox"));

    Index.render(
        <React.StrictMode>
            <CommentBox/>
        </React.StrictMode>
    )
}
