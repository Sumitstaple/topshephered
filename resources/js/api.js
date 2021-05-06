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
  return  axios.post(apiurl+'portal/createusers',data, {
    header:{
      "Accept": "application/json",
     'content-type': 'multipart/form-data'
    }
  })
  .then(response => {
  	return response
  })
}


export function edituser(data,id) {
  return axios.put(apiurl+'portal/users/'+id, {
    header:{
        "Accept": "application/json",
       },
       body: data
  })
  .then(response => {
    return response;
  })
}
export function getusers() {
  
return axios.get(apiurl+'portal/users', {

      })
      .then(response => {
            return response;
      })

}              
export function getuser(id) {

return axios.get(apiurl+'portal/users/'+id, {

      })
      .then(response => {
            return response;
      })

}        
export function deleteusers(id) {
return axios.delete(apiurl+'portal/users/'+id, {

        })
        .then(response => {
             return response;
        })  
}

export function createpets(data) {
  return  axios.post(apiurl+'pets/create', data, {
    header:{
      "Accept": "application/json",
     'content-type': 'multipart/form-data'
    }
  })
  .then(response => {
    return response
  })
}

export function getfather() {

return axios.get(apiurl+'pets/petinfo/getfather', {

      })
      .then(response => {
            return response;
      })
}
export function getpetbyid(id) {

return axios.get(apiurl+'pets/petinfo/getfather/'+id, {

      })
      .then(response => {
            return response;
      })
}

export function getmother() {

return axios.get(apiurl+'pets/petinfo/getmother', {

      })
      .then(response => {
            return response;
      })
}

export function savemotherid(id,petid) {

  var data = {id:id,petid:petid}

return axios.post(apiurl+'pets/petinfo/savemother', data, {
    header:{
      "Accept": "application/json",
     'content-type': 'multipart/form-data'
    }
  })
  .then(response => {
    return response
  })
}

export function savepricepet(data) {

return axios.post(apiurl+'pets/petinfo/saveprice', data, {
    header:{
      "Accept": "application/json",
     'content-type': 'multipart/form-data'
    }
  })
  .then(response => {
    return response
  })
}

export function getallpets() {

return axios.get(apiurl+'pets/all', {

      })
      .then(response => {
            return response;
      })
}

export function deletePets(id) {
return axios.delete(apiurl+'pets/'+id, {

        })
        .then(response => {
             return response;
        })  
}