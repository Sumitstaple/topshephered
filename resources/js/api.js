import axios from 'axios';

var apiurl = 'http://127.0.0.1:8000/api/';

export function fetchSportList(query) {
  return request({
    url: '/admin/users',
    method: 'get',
    params: query,
  });
}

export function createusers(data) {
  axios.post(apiurl+'portal/createusers', {
    header:{
     "Accept": "application/json",
    },
    body: data
  })
  .then(response => {
  	return response
  })
}
