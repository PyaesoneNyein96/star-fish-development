import React from 'react'
import { sidebarlist } from './sidebar-list'
import { motion } from "framer-motion"
import { useState } from 'react';
import { useSelector, useDispatch } from 'react-redux'
import { setSelectItem } from '@/Dashboard_Components/Slices/sidebarSlice';

const Sidebar = () => {
    const selectItem = useSelector(state => state.sidebar.selectItem);
    const dispatch = useDispatch();

    return (
        <motion.section
            initial={{ transform: "translateX(-100%)" }}
            animate={{ transform: "translateX(0%)" }}
            exit={{ transform: "translateX(-100%)" }}
            transition={{ duration: 0.5 }}
            className="w-64 bg-white shadow-lg  h-screen pt-20 duration-500 "
        >
            <div className='text-start mx-4'>
                {sidebarlist.map((sl) => (
                    <div key={sl.name}>
                        {sl.gap && <hr />}
                        <p
                            className={`${sl.name === selectItem ? "bg-blue-50" : ""} ${sl.gap ? "mt-6" : ""} py-3 font-bold hover:bg-blue-50 ps-2 rounded cursor-point my-1`}
                            style={{ color: "#173b7c" }}
                            onClick={() => dispatch(setSelectItem(sl.name))}
                        >
                            <i className={sl.icon + " pr-2"}></i>{sl.name}
                        </p>

                    </div>
                ))
                }
            </div >
        </motion.section >
    )
}

export default Sidebar
