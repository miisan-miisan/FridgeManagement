import React from 'react';

import '../../css/button.css';

function AteButton({baseUrl, items, setItems, isLoading, setIsLoading, id}) {

    // 削除処理
    const destroy  = async (id) => {
        const url = "/home/" + id;
        setIsLoading(true);
        await baseUrl.post( url, {_method: 'delete'}
        ).then((response) => {
            const data = response.data.items;
            setItems(data);
            setIsLoading(false);
        });
    }

    if (!isLoading) {
        return (
          <>
            <button type="button" className="ate" onClick={() => destroy(id)}>食べた！</button>
          </>
        );
    } else {
        return (
          <>
            <button type="button" className="ate gray" onClick={() => destroy(id)} disabled={isLoading}>食べた！</button>
          </>
          );    }
  }

export default AteButton;