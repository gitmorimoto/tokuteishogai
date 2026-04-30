
export function getAddress(zip,callback) {
  fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zip}`)
    .then(res => res.json())
    .then(data => {
      if (data.results) {
        const result = data.results[0];
        const address = result.address1 + result.address2 + result.address3;
        console.log(address);
        callback(address);
        
      } else {
        console.log("住所が見つかりません");
        callback(null);
      }
    })
    .catch(err => console.error(err));

    
}



// 使用例
//getAddress("1000001");
