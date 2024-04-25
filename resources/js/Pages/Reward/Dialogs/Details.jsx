import { router } from '@inertiajs/react';
import React, { useEffect, useState } from 'react'

const Details = ({ reward, back }) => {
    const [isExist, setIsExist] = useState(null);
    const [addStar, setAddStar] = useState(null);
    const [itemPic, setItemPic] = useState(null);
    const [itemEditPic, setItemEditPic] = useState(null);
    const [editStar, setEditStar] = useState(null);
    const [edit, setEdit] = useState(null);

    const formData = {
        'name': reward[0].name,
        'item': itemPic,
        'point': addStar,
        'type': reward[0].type
    }

    const handleUploadPic = (data) => {
        var FileUploadPath = data.value;
        var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

        if (Extension == "png") {
            if (data.files && data.files[0]) {
                var name = data.files.item(0).name.split(".").pop();
                var image_name = name.join(".")
                setIsExist(image_name)
                setItemPic(data.files.item(0));
            }
        }
        else {
            alert("Photo only allows file types of PNG. ");

        }
    }
    const handleBtnAddItem = (e) => {
        e.preventDefault();
        if (addStar && itemPic) {
            router.post("/dashboard/rewards/per/add", formData)
        } else {
            alert("Enter Data")
        }
    }

    const handleBtnRemoveReward = () => {
        var res = confirm(`This will remove all of " ${reward[0].name} " data. /nConfirm to remove.`)
        if (res) {
            router.delete(`/dashboard/rewards/remove/${reward[0].name}`)
            back(null);
        }
    }

    const handleBtnPerDelete = (val) => {
        var res = confirm(`Are you sure to remove this item " ${val.item.split("_").pop().split(".").shift()} "?`)
        if (res) router.delete(`/dashboard/rewards/per/delete/${val.id}`)
    }

    const handlebtnEdit = (id, type) => {
        if (itemEditPic && editStar) {
            var data = itemEditPic.target;
            console.log(data)
            var FileUploadPath = data.value;
            var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

            if (Extension == "png") {
                if (data.files && data.files[0]) {
                    const editForm = {
                        id,
                        type,
                        "item": data.files.item(0),
                        "point": editStar
                    }
                    router.post("/dashboard/rewards/per/edit", editForm)
                    setEdit(null)
                }
            }

            else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
            }
        } else {
            alert("Enter data.");

        }
    }

    const settingNewName = (data) => {
        var FileUploadPath = data.value;
        var Extension = FileUploadPath.substring(FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

        if (Extension == "png") {
            if (data.files && data.files[0]) {
                const updateForm = {
                    "name": data.files.item(0),
                    "old_name": reward[0].name
                }
                router.post("/dashboard/rewards/rename", updateForm)
                back(null)
            }
        }
        else {
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");
        }
    }

    const btnBack = () => {
        back(null);
    };

    return (
        <div>
            <div className='flex w-full'>
                <div className='rounded-lg border-solid border-2 overflow-y-scroll bg-white w-[64%] h-[76vh] mr-2 drop-shadow'>
                    <div className=' m-1 p-2 flex justify-between' style={{ backgroundColor: "#eff6ff" }}>
                        <h1 className=' font-bold'>{reward[0].name.split("_").pop().split(".").shift()}</h1>
                        <button
                            title='rename'
                            className='mr-2'
                        >
                            <label htmlFor="addNewName">
                                <i className="fa-regular fa-pen-to-square "></i>
                            </label>
                            <input
                                type="file"
                                id='addNewName'
                                hidden
                                onChange={(e) => settingNewName(e.target)}
                            />
                        </button>
                    </div>
                    {reward.map((val) => (

                        <div className=' flex items-center mx-4' key={val.id}>
                            <table className='w-full'>

                                <tbody className=" text-left ">
                                    <tr className='h-12 border-b-2 border-sky-100' >
                                        <td className='px-3 w-[50%]'>
                                            {edit && (edit.id === val.id) ?
                                                <>
                                                    <label
                                                        htmlFor="addNewItem"
                                                        className='opacity-40 border bg-white drop-shadow rounded-md px-5 py-2'
                                                    >
                                                        {edit.item.split("_").pop().split(".").shift()}
                                                    </label>
                                                    <input
                                                        type="file"
                                                        id='addNewItem'
                                                        hidden
                                                        onChange={(e) => setItemEditPic(e)}
                                                    />
                                                </> : val.item.split("_").pop().split(".").shift()
                                            }
                                        </td>
                                        <td className='px-3 w-[30%] text-end'>
                                            {edit && (edit.id === val.id) ?
                                                <select
                                                    className='w-[52%] border px-3  bg-white drop-shadow rounded-md '
                                                    onChange={(e) => setEditStar(e.target.value)}
                                                >
                                                    <option value="null">stars</option>
                                                    <option value="30" >30</option>
                                                    <option value="100" >100</option>
                                                </select>
                                                :
                                                <>
                                                    <b>{val.point}</b><span> stars</span>
                                                </>
                                            }
                                        </td>
                                        <td className=' text-end'>
                                            {edit && (edit.id === val.id) ?
                                                <>
                                                    <button
                                                        className="border px-2 py-1 mx-2 hover:bg-slate-700 text-sm text-white bg-slate-600 rounded-md drop-shadow "
                                                        title='Back'
                                                        onClick={() => setEdit(null)}
                                                    >
                                                        <i class="fa-solid fa-rotate-left"></i>
                                                    </button>

                                                    <button
                                                        className="border px-2 py-1 mx-2 hover:bg-red-600 text-sm text-white bg-red-500 rounded-md drop-shadow"
                                                        title='Add'
                                                        onClick={() => handlebtnEdit(val.id, val.type)}
                                                    >
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                </>
                                                :
                                                <>
                                                    <button
                                                        className="border px-2 py-1 mx-2 hover:bg-sky-700 text-sm text-white bg-sky-600 rounded-md drop-shadow "
                                                        title='Edit'
                                                        onClick={() => setEdit(val)}
                                                    >
                                                        <i className="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <button
                                                        className="border px-2 py-1 mx-2 hover:bg-red-600 text-sm text-white bg-red-500 rounded-md drop-shadow"
                                                        title='Delete'
                                                        onClick={() => handleBtnPerDelete(val)}
                                                    >
                                                        <i className="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </>
                                            }

                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    ))}

                </div>
                <div className='w-[34%] ml-2'>
                    <div className=" rounded-lg border-solid border-2  bg-white pb-2  h-[33vh] drop-shadow">
                        <div className=' m-1 p-2 ' style={{ backgroundColor: "#eff6ff" }}>
                            <h1 className=' font-bold'>Add Item</h1>
                        </div>
                        <div className="flex mt-5 mx-2">
                            <div className=" w-full  px-2">
                                <p className=' text-sm font-bold'>Upload Picture</p>
                                <div className="border px-3 py-2 bg-white drop-shadow mt-1 rounded-md ">
                                    <label
                                        htmlFor="addNewItem"
                                        className='opacity-40 '
                                    >
                                        {isExist ? isExist : "click to choose"}
                                    </label>
                                    <input
                                        type="file"
                                        id='addNewItem'
                                        hidden
                                        onChange={(e) => handleUploadPic(e.target)}
                                    />
                                </div>
                            </div>
                            <div className=" w-full px-2">
                                <p className=' text-sm font-bold'>Enter Stars</p>
                                <select
                                    className='w-full border px-3 py-2 bg-white drop-shadow mt-1 rounded-md '
                                    style={{ border: "1px solid #eff6ff" }}
                                    onChange={(e) => setAddStar(e.target.value)}
                                >
                                    <option value="null">select stars</option>
                                    <option value="30" >30</option>
                                    <option value="100" >100</option>
                                </select>
                            </div>
                        </div>
                        <div className="flex justify-end m-4">
                            <button
                                className="border px-4 py-1 hover:bg-teal-100 text-sm   ml-1  rounded-md drop-shadow"
                                title='Add'
                                style={{ backgroundColor: "#eff6ff", }}
                                onClick={(e) => handleBtnAddItem(e)}
                            >
                                Add
                            </button >
                        </div>
                    </div>
                    <div className="flex justify-between mt-5">
                        <button
                            className="border px-3 py-2  hover:bg-red-700 text-sm text-white bg-red-600  ml-1  rounded-md drop-shadow"
                            title='Remove'
                            onClick={() => handleBtnRemoveReward()}
                        >
                            Remove " {reward[0].name.split("_").pop().split(".").shift()} "
                        </button >
                        <button
                            className='border rounded-md px-6 py-2 hover:bg-teal-100 font-bold drop-shadow'
                            style={{ backgroundColor: "#eff6ff", }}
                            onClick={() => btnBack()}
                        >
                            Back
                        </button>
                    </div>
                </div>
            </div>

        </div >
    )
}

export default Details
