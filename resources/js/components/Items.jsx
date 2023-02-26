import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom/client';
import axios from "axios";
import AteButton from './AteButton';
import FreezeItems from './FreezeItems';

import '../../css/app.css';
import '../../css/Items.css';

function Items() {
    const baseUrl = axios.create({ baseURL: 'http://localhost:8000' });
    const [items, setItems] = useState([]);
    const [isLoading, setIsLoading] = useState(false);
    
    // 初期表示処理
    useEffect(() => {
        const homeContainer = document.getElementById('homeContainer');
        const data = JSON.parse(homeContainer.dataset.items);
        setItems(data);
    },[])

    // 削除処理
    // const destroy  = async (id) => {
    //     const url = "/home/"+id;
    //     setIsLoading(true);
    //     await baseUrl.post( url, {_method: 'delete'}
    //     ).then((response) => {
    //         const data = response.data.items;
    //         setItems(data);
    //         setIsLoading(false);
    //     });
    // }

    if(items.length > 0) {
        return (
            <>
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        {/* <div className="card" style="margin-bottom: 20px; border: white solid 2px;"> */}
                        <div className="card">
                            {/* <div className="card-header" style="background-color: rgb(255, 166, 0); display: flex; justify-content: space-between"> */}
                            <div className="card-header">
                                <div className="title font-color-w">冷蔵庫</div>
                            </div>
                                <div className="card-body  main-backcolor">
                                {items.map((item, index) => (
                                    <div className="box" key={index}>
                                        <div className="leftBox">
                                            <div><p className="expiration font-color-w">
                                                {item.msg}
                                            </p></div>
                                        </div>
                                        <div className="centerBox main-headercolor">
                                            <p className="itemName font-color-w">{item.name}</p>
                                        </div>
                                        <div className="rightBox main-headercolor">
                                            <div>
                                                <AteButton 
                                                    baseUrl={baseUrl}
                                                    items={items} 
                                                    setItems={setItems} 
                                                    isLoading={isLoading} 
                                                    setIsLoading={setIsLoading}
                                                    id={item.id}
                                                />
                                            </div>
                                            <div><button className="edit"><a href="home/edit, {$items.id}">編集</a></button></div>
                                        </div>
                                    </div>
                                    ))
                                }
                            </div>
                        </div>
                    </div>
                </div>
                <FreezeItems baseUrl={baseUrl}  isLoading={isLoading} setIsLoading={setIsLoading} />
            </>
        );
    } else {
        return (
            <>
                <p className="alignCenter">冷蔵庫は空です</p>
                <FreezeItems baseUrl={baseUrl}/>
            </>
        )
    }
}

export default Items;

if (document.getElementById('homeContainer')) {
    const Index = ReactDOM.createRoot(document.getElementById("homeContainer"));

    Index.render(
        <React.StrictMode>
            <Items/>
        </React.StrictMode>
    )
}