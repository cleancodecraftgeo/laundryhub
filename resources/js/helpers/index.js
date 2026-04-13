export function useHelpers(){
    const truncate = (text,limit=20) =>{
  if(!text) return ''
  return text.length > limit ? text.substr(0,limit) + '...' : text
};

const price = (value=0)=>{
    return new Intl.NumberFormat('ge-GE',{style: 'currency',currency:'GEL'}).format(value)
};

return {truncate,price}

}


